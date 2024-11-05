@extends('layouts.admin')

@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-8 space-y-8 bg-white rounded-lg shadow">
        <h2 class="text-3xl font-bold text-center">Admin Login</h2>
        @if (session('success'))
            <div class="relative px-4 py-3 text-green-700 bg-green-100 border border-green-400 rounded" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
            </div>

            @error('email')
                <div class="text-sm text-red-500">{{ $message }}</div>
            @enderror

            <button type="submit"
                class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700">
                Login
            </button>
        </form>

        <a href="{{ route('admin.register') }}" class="block text-sm text-center text-blue-600 hover:text-blue-500">
            Register new account
        </a>
    </div>
</div>
@endsection