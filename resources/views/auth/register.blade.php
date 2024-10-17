@extends('layouts.app')

@section('content')
<!-- resources/views/auth/register.blade.php -->
@if(session('success'))
    <div class="relative px-4 py-3 text-green-700 bg-green-100 border border-green-400 rounded" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="flex items-center justify-center min-h-screen px-4 py-12 bg-gray sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
        <div>
            <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900">
                Đăng ký tài khoản mới
            </h2>
        </div>
        <form class="mt-8 space-y-6" action="{{ route('register.submit') }}" method="POST">
            @csrf
            <div class="p-8 bg-white rounded-md shadow-lg" style="min-height: 450px;">
                <div class="mb-4">
                    <label for="name" class="sr-only">Họ tên</label>
                    <input id="name" name="name" type="text" required
                        class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded appearance-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        placeholder="Họ tên">
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Địa chỉ email</label>
                    <input id="email" name="email" type="email" required
                        class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded appearance-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        placeholder="Địa chỉ email">
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Mật khẩu</label>
                    <input id="password" name="password" type="password" required
                        class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded appearance-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        placeholder="Mật khẩu">
                </div>
                <div class="mb-6">
                    <label for="password_confirmation" class="sr-only">Xác nhận mật khẩu</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required
                        class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded appearance-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        placeholder="Xác nhận mật khẩu">
                </div>

                <div>
                    <button type="submit"
                        class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md group hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Đăng ký
                    </button>
                </div>

                <div class="mt-4 text-sm text-center">
                    <a href="/login" class="font-medium text-indigo-600 hover:text-indigo-500">
                        Đã có tài khoản? Đăng nhập
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection