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
        $users = User::getAllusers(); // Lấy tất cả người dùng
        return view('auth.users', compact('users')); // Trả về view với danh sách người dùng
    }
    public function adminListUsers()
    {
        $users = User::all(); // Lấy tất cả người dùng
        return view('admin.user', compact('users')); // Trả về view với danh sách người dùng
    }
    public function editUser($id)
    {
        $user = User::getUser($id);
        return view('auth.edit', compact('user'));
    }

    /*************  ✨ Codeium Command ⭐  *************/
    /**
     * Cập nhật thông tin người dùng
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    /******  fb5ba3f0-2faa-4c31-b700-fbfc542a571f  *******/
    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        $user = User::getUser($id);
        $user->update($request->only(['name', 'email']));

        return redirect()->route('users.list')->with('success', 'Cập nhật thành công!');
    }
    public function deleteUser($id)
    {
        $user = User::getUser($id);
        $user->deleteUserById($id);
        return redirect()->route('users.list')->with('success', 'Xoá thành công!');
    }
}
