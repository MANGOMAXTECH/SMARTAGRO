<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'phone_number',
        'password',
        'role',
        'status',
        'last_login_at',
        'last_login_ip',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function activityLogs()
    {
        return $this->hasMany(UserActivityLog::class);
    }

    public function getRoleBadgeAttribute()
    {
        if ($this->hasRole('admin')) {
            return 'danger';
        } elseif ($this->hasRole('farmer')) {
            return 'info';
        } elseif ($this->hasRole('buyer')) {
            return 'success';
        }
        return 'secondary';
    }

    public function scopeAdmins($query)
    {
        return $query->whereHas('roles', function($q) {
            $q->where('name', 'admin');
        });
    }

    public function scopeFarmers($query)
    {
        return $query->whereHas('roles', function($q) {
            $q->where('name', 'farmer');
        });
    }

    public function scopeBuyers($query)
    {
        return $query->whereHas('roles', function($q) {
            $q->where('name', 'buyer');
        });
    }
}
