<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\User;
use App\Models\admin\Role;

class UserController extends Controller
{
    //
    public function index()
    {
        // Lấy 10 người dùng mỗi trang và cùng lúc eager load các vai trò
        $users = User::with('roles')->paginate(10);
        $roles = Role::all();

        // Lấy tên vai trò 'admin'
        $adminRole = Role::where('name', 'admin')->first();
        $adminRoleName = $adminRole ? $adminRole->name : 'No Role Found';

        // Trả về view với biến users, roles và adminRole
        return view('admin.user', compact('users', 'roles', 'adminRole'));
    }
}
