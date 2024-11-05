@extends('layouts.admin')

@section('content')
<div class="flex items-center justify-center h-screen bg-gray-100">
    @if (session('success'))
        <div class="relative px-4 py-3 text-green-700 bg-green-100 border border-green-400 rounded" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="w-full max-w-md p-8 space-y-3 bg-white shadow-lg rounded-xl">
        <h1 class="text-2xl font-bold text-center">Register</h1>
        <form method="POST" action="{{ route('admin.register.post') }}" class="space-y-6">
            @csrf
            <div class="space-y-1">
                <label class="block text-sm font-medium">Name</label>
                <input type="text" name="name"
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200"
                    required>
            </div>
            <div class="space-y-1">
                <label class="block text-sm font-medium">Email</label>
                <input type="email" name="email"
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200"
                    required>
            </div>
            <div class="space-y-1">
                <label class="block text-sm font-medium">Password</label>
                <input type="password" name="password"
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200"
                    required>
            </div>
            <div class="space-y-1">
                <label class="block text-sm font-medium">Confirm Password</label>
                <input type="password" name="password_confirmation"
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200"
                    required>
            </div>
            <button type="submit"
                class="w-full py-2 font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-500">Register</button>
        </form>
        <p class="text-sm text-center">Already have an account? <a href="{{ route('admin.login') }}"
                class="text-indigo-600 hover:underline">Login</a></p>
    </div>
</div>
@endsection