<?php
// app/Models/UserActivityLog.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserActivityLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'activity_type',
        'description',
        'ip_address',
        'user_agent',
        'data',
    ];

    protected $casts = [
        'data' => 'array',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Scopes
    public function scopeByType($query, $type)
    {
        return $query->where('activity_type', $type);
    }

    public function scopeRecent($query, $limit = 100)
    {
        return $query->orderBy('created_at', 'desc')->limit($limit);
    }

    public function scopeDateRange($query, $from, $to)
    {
        if ($from) {
            $query->whereDate('created_at', '>=', $from);
        }
        if ($to) {
            $query->whereDate('created_at', '<=', $to);
        }
        return $query;
    }

    // Accessors
    public function getActivityTypeLabelAttribute()
    {
        $labels = [
            'login' => 'Login',
            'logout' => 'Logout',
            'profile_update' => 'Profile Update',
            'role_change' => 'Role Change',
            'status_change' => 'Status Change',
            'password_reset' => 'Password Reset',
            'account_created' => 'Account Created',
            'account_suspended' => 'Account Suspended',
            'account_reactivated' => 'Account Reactivated',
        ];
        return $labels[$this->activity_type] ?? ucfirst($this->activity_type);
    }

    public function getActivityIconAttribute()
    {
        $icons = [
            'login' => 'fa-sign-in-alt',
            'logout' => 'fa-sign-out-alt',
            'profile_update' => 'fa-user-edit',
            'role_change' => 'fa-user-tag',
            'status_change' => 'fa-user-check',
            'password_reset' => 'fa-key',
            'account_created' => 'fa-user-plus',
            'account_suspended' => 'fa-user-slash',
            'account_reactivated' => 'fa-user-check',
        ];
        return $icons[$this->activity_type] ?? 'fa-circle';
    }

    public function getActivityColorAttribute()
    {
        $colors = [
            'login' => 'success',
            'logout' => 'warning',
            'profile_update' => 'info',
            'role_change' => 'primary',
            'status_change' => 'secondary',
            'password_reset' => 'danger',
            'account_created' => 'success',
            'account_suspended' => 'danger',
            'account_reactivated' => 'success',
        ];
        return $colors[$this->activity_type] ?? 'secondary';
    }
}