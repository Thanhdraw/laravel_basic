<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email', // Kiểm tra tính duy nhất của email
            'password' => 'required|string|min:3|confirmed',
        ]);

        // Create new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // dd($user);

        return view('auth.register', ['user' => $user, 'success' => 'Đăng ký thành công!']);
    }
    public function listUsers()
    {
        $users = User::all(); // Lấy tất cả người dùng
        return view('auth.users', compact('users')); // Trả về view với danh sách người dùng
    }
}
