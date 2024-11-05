<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\admin\User;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\admin\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    use ValidatesRequests;

    public function index()
    {
        return view('admin.admin');
    }
    // Xử lý đăng nhập
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function showRegisterForm()
    {
        return view('admin.auth.register');
    }

    public function register(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string|min:6',
        ]);

        // Tạo mới người dùng và lưu vào cơ sở dữ liệu
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Mã hóa mật khẩu trước khi lưu
        ]);

        // Đăng nhập người dùng mới đăng ký (nếu cần)
        Auth::login($user);
        // Chuyển hướng sau khi đăng ký thành công
        return redirect()->route('admin.dashboard')->with('success', 'Đăng ký thành công!');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.index')->with('success', 'Đăng nhập thanh cong!');
        } else {
            return back()->with('error', 'Đăng những sai!');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('admin.login');
    }
    public function addAdmin()
    {
        $users = User::with('roles')->get();
        $adminRole = Role::where('name', 'admin')->first()->name;

        return view('admin.dashboard', compact('users', 'adminRole'));
    }



}
