<!-- resources/views/auth/login.blade.php -->
@extends('layouts.app')

@section('content')


<div class="flex items-center justify-center min-h-screen px-4 py-12 bg-gray sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
        <div>
            <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900">
                Login
            </h2>
        </div>
        <form class="mt-8 space-y-6" action="#" method="POST">
            @csrf
            <div class="p-8 bg-white rounded-md shadow-lg" style="min-height: 350px;">
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

                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox"
                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                        <label for="remember_me" class="block ml-2 text-sm text-gray-900">
                            Ghi nhớ đăng nhập
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                            Quên mật khẩu?
                        </a>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md group hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Đăng nhập
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection