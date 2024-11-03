@extends('layouts.admin')



@section('content')

<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="w-full max-w-md p-8 space-y-3 rounded-xl bg-white shadow-lg">
        <h1 class="text-2xl font-bold text-center">Register</h1>
        <form method="POST" action="{{ route('admin.register.post') }}" class="space-y-6">
            @csrf
            <div class="space-y-1">
                <label class="block text-sm font-medium">Name</label>
                <input type="text" name="name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200" required>
            </div>
            <div class="space-y-1">
                <label class="block text-sm font-medium">Email</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200" required>
            </div>
            <div class="space-y-1">
                <label class="block text-sm font-medium">Password</label>
                <input type="password" name="password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200" required>
            </div>
            <div class="space-y-1">
                <label class="block text-sm font-medium">Confirm Password</label>
                <input type="password" name="password_confirmation" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200" required>
            </div>
            <button type="submit" class="w-full py-2 font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-500">Register</button>
        </form>
        <p class="text-sm text-center">Already have an account? <a href="{{ route('admin.login') }}" class="text-indigo-600 hover:underline">Login</a></p>
    </div>
</body>
@endsection