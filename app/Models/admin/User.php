<?php

namespace App\Models\admin;
use Illuminate\Foundation\Auth\User as Authenticatable; // Thay đổi ở đây

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable // Thay đổi ở đây
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'role',
        'status',
        'is_admin'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    // Hàm kiểm tra role
    // public function hasRole($role)
    // {
    //     return $this->roles()->where('name', $role)->exists();
    // }
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        if (is_array($role)) {
            return $this->roles->whereIn('name', $role)->count() > 0;
        }

        return !!$role->intersect($this->roles)->count();
    }

    // Kiểm tra user có một trong các role
    public function hasAnyRole($roles)
    {
        if (is_string($roles)) {
            return $this->hasRole($roles);
        }

        foreach ($roles as $role) {
            if ($this->hasRole($role)) {
                return true;
            }
        }
        return false;
    }

    // Kiểm tra user có tất cả roles
    public function hasAllRoles($roles)
    {
        if (is_string($roles)) {
            return $this->hasRole($roles);
        }

        foreach ($roles as $role) {
            if (!$this->hasRole($role)) {
                return false;
            }
        }
        return true;
    }



}
