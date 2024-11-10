@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h1 class="mb-4 text-2xl font-bold">User Management</h1>

    <div class="p-4 mb-4 bg-white rounded-lg shadow">
        <h2 class="mb-2 text-lg font-medium">All Users</h2>
        <table class="w-full">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Role</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="px-4 py-2 border">{{ $user->name ?? 'Guest' }}</td>
                        <td class="px-4 py-2 border">{{ $user->email }}</td>
                        <td class="px-4 py-2 border {{ $user->roles->contains('name', 'admin') ? 'font-bold' : '' }}">
                            @foreach ($user->roles as $role)
                                {{ ucfirst($role->name) }}
                                @if (!$loop->last), @endif
                            @endforeach
                        </td>
                        <td class="px-4 py-2 border">
                            <a href="#" class="mr-2 text-blue-500 hover:text-blue-700">Edit</a>
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $users->links() }}
        </div>
    </div>

    <div class="p-4 bg-white rounded-lg shadow">
        <h2 class="mb-2 text-lg font-medium">Create New User</h2>
        <form action="#" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name"
                    class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    required>
            </div>
            <div>
                <label for="email" class="block font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email"
                    class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    required>
            </div>
            <div>
                <label for="role" class="block font-medium text-gray-700">Role</label>
                <select id="role" name="role"
                    class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    required>
                    @foreach ($roles as $role)
                        <option value="{{ $role->name }}">{{ ucfirst($role->name) }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit"
                class="px-4 py-2 font-bold text-white bg-indigo-500 rounded hover:bg-indigo-700">Create User</button>
        </form>
    </div>
</div>
@endsection
