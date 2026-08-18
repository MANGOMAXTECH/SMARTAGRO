<?php
// app/Http/Controllers/Admin/UserManagementController.php
// ============================================================================
// User Management Controller
// Handles all admin user management operations including:
// - User listing with search and filters
// - Farmer, Buyer, and Pending Verification management
// - Activity logs viewing
// - User CRUD operations
// - Status and verification management
// ============================================================================

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UserManagementController extends Controller
{
    // =========================================================================
    // ALL USERS
    // =========================================================================

    /**
     * Display all users with search and filter support.
     */
    public function index(Request $request)
    {
        // Build query with eager loading of roles
        $query = User::with('roles');

        // ===== SEARCH LOGIC =====
        // Search by name, email, or phone number
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        // ===== ROLE FILTER =====
        // Filter users by assigned role
        if ($request->has('role') && $request->role) {
            $query->role($request->role);
        }

        // ===== STATUS FILTER =====
        // Filter by account status
        if ($request->has('status') && $request->status) {
            $query->where('status', $request->status);
        }

        // ===== VERIFICATION FILTER =====
        // Filter by verification status
        if ($request->has('verification') && $request->verification) {
            $query->where('verification_status', $request->verification);
        }

        // ===== PAGINATION =====
        // Order by newest first and paginate results
        $users = $query->orderBy('created_at', 'desc')->paginate(10);

        // ===== FILTER OPTIONS =====
        // Get all roles for filter dropdown
        $roles = Role::all()->pluck('name');

        return view('admin.user-management.index', compact('users', 'roles'));
    }

    // =========================================================================
    // FARMERS
    // =========================================================================

    /**
     * Display all Farmer users with search and filter support.
     */
    public function farmers(Request $request)
    {
        // Load only users with Farmer role
        $query = User::role('farmer')->with('roles');

        // ===== SEARCH LOGIC =====
        // Search by name, email, or phone
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        // ===== STATUS FILTER =====
        if ($request->has('status') && $request->status) {
            $query->where('status', $request->status);
        }

        // ===== VERIFICATION FILTER =====
        if ($request->has('verification') && $request->verification) {
            $query->where('verification_status', $request->verification);
        }

        // ===== PAGINATION =====
        $farmers = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.user-management.farmers', compact('farmers'));
    }

    // =========================================================================
    // BUYERS
    // =========================================================================

    /**
     * Display all Buyer users with search and filter support.
     */
    public function buyers(Request $request)
    {
        // Load only users with Buyer role
        $query = User::role('buyer')->with('roles');

        // ===== SEARCH LOGIC =====
        // Search by name, email, or phone
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        // ===== STATUS FILTER =====
        if ($request->has('status') && $request->status) {
            $query->where('status', $request->status);
        }

        // ===== PAGINATION =====
        $buyers = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.user-management.buyers', compact('buyers'));
    }

    // =========================================================================
    // PENDING VERIFICATION
    // =========================================================================

    /**
     * Display all pending verification users with search and filter support.
     */
    public function pending(Request $request)
    {
        // Load only users with pending verification status
        $query = User::where('verification_status', 'pending')->with('roles');

        // ===== SEARCH LOGIC =====
        // Search by name, email, or phone
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        // ===== ROLE FILTER =====
        // Filter pending users by role
        if ($request->has('role') && $request->role) {
            $query->role($request->role);
        }

        // ===== PAGINATION =====
        $pendingUsers = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.user-management.pending', compact('pendingUsers'));
    }

    // =========================================================================
    // ACTIVITY LOGS
    // =========================================================================

    /**
     * Display activity logs with search and filter support.
     */
    public function activityLogs(Request $request)
    {
        // Build query with user relationship
        $query = UserActivityLog::with('user');

        // ===== SEARCH LOGIC =====
        // Search by user name, activity type, or description
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('description', 'like', "%{$search}%")
                  ->orWhere('activity_type', 'like', "%{$search}%")
                  ->orWhereHas('user', function($userQuery) use ($search) {
                      $userQuery->where('name', 'like', "%{$search}%");
                  });
            });
        }

        // ===== ACTIVITY TYPE FILTER =====
        if ($request->has('activity_type') && $request->activity_type) {
            $query->where('activity_type', $request->activity_type);
        }

        // ===== ROLE FILTER =====
        // Filter logs by user role
        if ($request->has('role') && $request->role) {
            $query->whereHas('user', function($q) use ($request) {
                $q->role($request->role);
            });
        }

        // ===== DATE FILTER =====
        if ($request->has('date_from') && $request->date_from) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->has('date_to') && $request->date_to) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        // ===== PAGINATION =====
        $logs = $query->orderBy('created_at', 'desc')->paginate(15);

        // ===== FILTER OPTIONS =====
        $users = User::all();
        $activityTypes = UserActivityLog::select('activity_type')->distinct()->pluck('activity_type');

        return view('admin.user-management.activity-logs', compact('logs', 'users', 'activityTypes'));
    }

    public function show($id)
    {
        $user = User::with(['roles', 'activityLogs'])->findOrFail($id);
        $activitySummary = [
            'total_logins' => $user->activityLogs()->where('activity_type', 'login')->count(),
            'total_logouts' => $user->activityLogs()->where('activity_type', 'logout')->count(),
            'profile_updates' => $user->activityLogs()->where('activity_type', 'profile_update')->count(),
            'recent_activities' => $user->activityLogs()->recent(10)->get(),
        ];
        $availableRoles = Role::all()->pluck('name')->toArray();

        return view('admin.user-management.show', compact('user', 'activitySummary', 'availableRoles'));
    }

    public function create()
    {
        $roles = Role::all()->pluck('name')->toArray();
        return view('admin.user-management.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:20|unique:users,phone',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|exists:roles,name',
            'status' => 'required|in:active,inactive,suspended',
            'verification_status' => 'required|in:pending,verified,rejected',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'status' => $request->status,
                'verification_status' => $request->verification_status,
            ]);

            $user->assignRole($request->role);

            UserActivityLog::create([
                'user_id' => $user->id,
                'activity_type' => 'account_created',
                'description' => "Account created with role: {$request->role}",
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'data' => [
                    'created_by' => auth()->id(),
                    'created_by_name' => auth()->user()->name,
                    'role' => $request->role,
                    'status' => $request->status,
                    'verification_status' => $request->verification_status,
                ]
            ]);

            DB::commit();

            return redirect()->route('admin.users.show', $user->id)
                ->with('success', 'User created successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                ->with('error', 'Failed to create user: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all()->pluck('name')->toArray();
        $userRoles = $user->roles->pluck('name')->toArray();

        return view('admin.user-management.edit', compact('user', 'roles', 'userRoles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'required|string|max:20|unique:users,phone,' . $id,
            'role' => 'required|exists:roles,name',
            'status' => 'required|in:active,inactive,suspended',
            'verification_status' => 'required|in:pending,verified,rejected',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();

        try {
            $oldData = [
                'name' => $user->name,
                'email' => $user->email,
                'phone' => $user->phone,
                'role' => $user->roles->first()->name ?? null,
                'status' => $user->status,
                'verification_status' => $user->verification_status,
            ];

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'status' => $request->status,
                'verification_status' => $request->verification_status,
            ]);

            $currentRole = $user->roles->first()->name ?? null;
            if ($currentRole !== $request->role) {
                $user->syncRoles([$request->role]);

                UserActivityLog::create([
                    'user_id' => $user->id,
                    'activity_type' => 'role_change',
                    'description' => "Role changed from {$currentRole} to {$request->role}",
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                    'data' => [
                        'old_role' => $currentRole,
                        'new_role' => $request->role,
                        'changed_by' => auth()->id(),
                    ]
                ]);
            }

            if ($oldData['status'] !== $request->status) {
                UserActivityLog::create([
                    'user_id' => $user->id,
                    'activity_type' => 'status_change',
                    'description' => "Status changed from {$oldData['status']} to {$request->status}",
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                    'data' => [
                        'old_status' => $oldData['status'],
                        'new_status' => $request->status,
                        'changed_by' => auth()->id(),
                    ]
                ]);
            }

            if ($oldData['verification_status'] !== $request->verification_status) {
                $activityType = $request->verification_status === 'verified' ? 'farmer_verified' : 'farmer_rejected';
                UserActivityLog::create([
                    'user_id' => $user->id,
                    'activity_type' => $activityType,
                    'description' => "Verification status changed from {$oldData['verification_status']} to {$request->verification_status}",
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                    'data' => [
                        'old_status' => $oldData['verification_status'],
                        'new_status' => $request->verification_status,
                        'changed_by' => auth()->id(),
                    ]
                ]);
            }

            if ($oldData['name'] !== $request->name || $oldData['email'] !== $request->email || $oldData['phone'] !== $request->phone) {
                UserActivityLog::create([
                    'user_id' => $user->id,
                    'activity_type' => 'profile_update',
                    'description' => 'Profile information updated',
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                    'data' => [
                        'updated_by' => auth()->id(),
                        'old_data' => [
                            'name' => $oldData['name'],
                            'email' => $oldData['email'],
                            'phone' => $oldData['phone'],
                        ],
                        'new_data' => $request->only(['name', 'email', 'phone'])
                    ]
                ]);
            }

            DB::commit();

            return redirect()->route('admin.users.show', $user->id)
                ->with('success', 'User updated successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                ->with('error', 'Failed to update user: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $user = User::findOrFail($id);

            if ($user->id === auth()->id()) {
                return response()->json([
                    'success' => false,
                    'message' => 'You cannot delete your own account.'
                ], 403);
            }

            $user->syncRoles([]);
            $user->delete();

            return response()->json([
                'success' => true,
                'message' => 'User deleted successfully!'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete user: ' . $e->getMessage()
            ], 500);
        }
    }

    public function activate($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->update(['status' => 'active']);

            UserActivityLog::create([
                'user_id' => $user->id,
                'activity_type' => 'account_reactivated',
                'description' => 'Account activated by admin',
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
                'data' => [
                    'activated_by' => auth()->id(),
                    'activated_by_name' => auth()->user()->name,
                ]
            ]);

            return response()->json(['success' => true, 'message' => 'User activated successfully!']);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to activate user: ' . $e->getMessage()
            ], 500);
        }
    }

    public function suspend($id)
    {
        try {
            $user = User::findOrFail($id);

            if ($user->hasRole('admin')) {
                return response()->json([
                    'success' => false,
                    'message' => 'Cannot suspend an admin account.'
                ], 403);
            }

            $user->update(['status' => 'suspended']);

            UserActivityLog::create([
                'user_id' => $user->id,
                'activity_type' => 'account_suspended',
                'description' => 'Account suspended by admin',
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
                'data' => [
                    'suspended_by' => auth()->id(),
                    'suspended_by_name' => auth()->user()->name,
                ]
            ]);

            return response()->json(['success' => true, 'message' => 'User suspended successfully!']);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to suspend user: ' . $e->getMessage()
            ], 500);
        }
    }

    public function reactivate($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->update(['status' => 'active']);

            UserActivityLog::create([
                'user_id' => $user->id,
                'activity_type' => 'account_reactivated',
                'description' => 'Account reactivated by admin',
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
                'data' => [
                    'reactivated_by' => auth()->id(),
                    'reactivated_by_name' => auth()->user()->name,
                ]
            ]);

            return response()->json(['success' => true, 'message' => 'User reactivated successfully!']);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to reactivate user: ' . $e->getMessage()
            ], 500);
        }
    }

    public function verify($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->update(['verification_status' => 'verified']);

            UserActivityLog::create([
                'user_id' => $user->id,
                'activity_type' => 'farmer_verified',
                'description' => 'User verification approved by admin',
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
                'data' => [
                    'verified_by' => auth()->id(),
                    'verified_by_name' => auth()->user()->name,
                ]
            ]);

            return response()->json(['success' => true, 'message' => 'User verified successfully!']);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to verify user: ' . $e->getMessage()
            ], 500);
        }
    }

    public function reject($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->update(['verification_status' => 'rejected']);

            UserActivityLog::create([
                'user_id' => $user->id,
                'activity_type' => 'farmer_rejected',
                'description' => 'User verification rejected by admin',
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
                'data' => [
                    'rejected_by' => auth()->id(),
                    'rejected_by_name' => auth()->user()->name,
                ]
            ]);

            return response()->json(['success' => true, 'message' => 'User verification rejected!']);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to reject user: ' . $e->getMessage()
            ], 500);
        }
    }

    public function resetPassword(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'password' => 'required|string|min:8|confirmed',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'errors' => $validator->errors()
                ], 422);
            }

            $user = User::findOrFail($id);
            $user->update([
                'password' => Hash::make($request->password),
            ]);

            UserActivityLog::create([
                'user_id' => $user->id,
                'activity_type' => 'password_reset',
                'description' => 'Password reset by admin',
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'data' => [
                    'reset_by' => auth()->id(),
                    'reset_by_name' => auth()->user()->name,
                ]
            ]);

            return response()->json(['success' => true, 'message' => 'Password reset successfully!']);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to reset password: ' . $e->getMessage()
            ], 500);
        }
    }

    public function getActivityLogs(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);
            $query = $user->activityLogs();

            if ($request->has('type') && $request->type) {
                $query->where('activity_type', $request->type);
            }

            if ($request->has('date_from') && $request->date_from) {
                $query->whereDate('created_at', '>=', $request->date_from);
            }

            if ($request->has('date_to') && $request->date_to) {
                $query->whereDate('created_at', '<=', $request->date_to);
            }

            $logs = $query->orderBy('created_at', 'desc')
                ->paginate($request->per_page ?? 20);

            return response()->json([
                'success' => true,
                'data' => $logs->map(function($log) {
                    return [
                        'id' => $log->id,
                        'activity_type' => $log->activity_type_label,
                        'icon' => $log->activity_icon,
                        'color' => $log->activity_color,
                        'description' => $log->description,
                        'ip_address' => $log->ip_address ?? '-',
                        'date' => $log->created_at->format('Y-m-d H:i:s'),
                        'date_human' => $log->created_at->diffForHumans(),
                        'data' => $log->data,
                    ];
                }),
                'pagination' => [
                    'current_page' => $logs->currentPage(),
                    'last_page' => $logs->lastPage(),
                    'per_page' => $logs->perPage(),
                    'total' => $logs->total(),
                ]
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch activity logs'
            ], 500);
        }
    }

    public function export(Request $request)
    {
        try {
            $query = User::with('roles');

            if ($request->has('role') && $request->role) {
                $query->role($request->role);
            }

            if ($request->has('status') && $request->status) {
                $query->where('status', $request->status);
            }

            $users = $query->get();
            $filename = 'users_export_' . now()->format('Y-m-d_His') . '.csv';

            $headers = [
                'Content-Type' => 'text/csv',
                'Content-Disposition' => 'attachment; filename="' . $filename . '"',
                'Cache-Control' => 'private, max-age=0, must-revalidate',
            ];

            $callback = function() use ($users) {
                $file = fopen('php://output', 'w');
                fputcsv($file, [
                    'ID', 'Name', 'Email', 'Phone', 'Role', 'Status',
                    'Verification', 'Email Verified', 'Registered At',
                    'Last Login', 'Last Login IP',
                ]);

                foreach ($users as $user) {
                    fputcsv($file, [
                        $user->id,
                        $user->name,
                        $user->email,
                        $user->phone ?? '',
                        $user->roles->first()->name ?? 'No Role',
                        ucfirst($user->status),
                        ucfirst($user->verification_status),
                        $user->email_verified_at ? 'Yes' : 'No',
                        $user->created_at->format('Y-m-d H:i:s'),
                        $user->last_login_at ? $user->last_login_at->format('Y-m-d H:i:s') : 'Never',
                        $user->last_login_ip ?? '',
                    ]);
                }

                fclose($file);
            };

            return response()->stream($callback, 200, $headers);

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Failed to export users: ' . $e->getMessage());
        }
    }

    public function getRoles()
    {
        try {
            $roles = Role::with('permissions')->get()->map(function($role) {
                return [
                    'id' => $role->id,
                    'name' => $role->name,
                    'permissions' => $role->permissions->pluck('name')->toArray()
                ];
            });

            return response()->json([
                'success' => true,
                'data' => $roles
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch roles'
            ], 500);
        }
    }

    private function getRoleBadge($user)
    {
        if ($user->hasRole('admin')) {
            return 'danger';
        } elseif ($user->hasRole('farmer')) {
            return 'info';
        } elseif ($user->hasRole('buyer')) {
            return 'success';
        }
        return 'secondary';
    }

    private function getActionButtons($user)
    {
        $buttons = '<div class="btn-group">';

        $buttons .= '<a href="' . route('admin.users.show', $user->id) . '" class="btn btn-sm btn-info" title="View"><i class="fas fa-eye"></i></a>';
        $buttons .= '<a href="' . route('admin.users.edit', $user->id) . '" class="btn btn-sm btn-primary" title="Edit"><i class="fas fa-edit"></i></a>';

        if ($user->status === 'active') {
            $buttons .= '<button onclick="suspendUser(' . $user->id . ')" class="btn btn-sm btn-warning" title="Suspend"><i class="fas fa-pause"></i></button>';
        } elseif ($user->status === 'suspended') {
            $buttons .= '<button onclick="reactivateUser(' . $user->id . ')" class="btn btn-sm btn-success" title="Reactivate"><i class="fas fa-play"></i></button>';
        }

        if ($user->status === 'inactive' || $user->status === 'suspended') {
            $buttons .= '<button onclick="activateUser(' . $user->id . ')" class="btn btn-sm btn-success" title="Activate"><i class="fas fa-check"></i></button>';
        }

        if ($user->verification_status === 'pending') {
            $buttons .= '<button onclick="verifyUser(' . $user->id . ')" class="btn btn-sm btn-success" title="Verify"><i class="fas fa-check"></i></button>';
            $buttons .= '<button onclick="rejectUser(' . $user->id . ')" class="btn btn-sm btn-danger" title="Reject"><i class="fas fa-times"></i></button>';
        }

        $buttons .= '<button onclick="deleteUser(' . $user->id . ')" class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></button>';
        $buttons .= '</div>';

        return $buttons;
    }
}
