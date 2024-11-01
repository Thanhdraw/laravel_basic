<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::paginate(10); // Lấy 10 người dùng mỗi trang

        return view('admin.users.users', compact('users'));
    }
}
