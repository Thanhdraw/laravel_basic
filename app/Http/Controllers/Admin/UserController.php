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
    
        // Lấy tên vai trò 'admin'
        $adminRole = Role::where('name', 'admin')->first()->name;
    
        // Trả về view với biến users và adminRole
        return view('admin.user', compact('users', 'adminRole'));
    }
    
}
