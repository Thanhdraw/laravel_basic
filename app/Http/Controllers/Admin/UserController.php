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
        $users = User::paginate(10); // Lấy 10 người dùng mỗi trang
        $users = User::with('roles')->get();
        $adminRole = Role::where('name', 'admin')->first()->name;
        return view('admin.user', compact('users', 'adminRole'));

    }
}
