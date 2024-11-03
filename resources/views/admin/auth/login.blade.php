@extends('layouts.admin')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full space-y-8 p-8 bg-white rounded-lg shadow">
        <h2 class="text-center text-3xl font-bold">Admin Login</h2>
        
        <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-6">
            @csrf
            
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            @error('email')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror

            <button type="submit" 
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">
                Login
            </button>
        </form>
        
        <a href="{{ route('admin.register') }}" 
           class="block text-center text-sm text-blue-600 hover:text-blue-500">
            Register new account
        </a>
    </div>
</div>
@endsection