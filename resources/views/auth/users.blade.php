@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen px-4 py-12 bg-gray-100 sm:px-6 lg:px-8">
    <div class="w-full max-w-4xl p-8 space-y-8 transition-transform bg-white rounded-lg shadow-2xl hover:scale-105">
        <h2 class="text-3xl font-extrabold text-center text-gray-800">Danh Sách Người Dùng</h2>
        <table class="w-full text-left divide-y divide-gray-300">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-4 text-xs font-semibold tracking-wider text-gray-600 uppercase">Name</th>
                    <th class="px-6 py-4 text-xs font-semibold tracking-wider text-gray-600 uppercase">Email</th>
                    <th class="px-6 py-4 text-xs font-semibold tracking-wider text-gray-600 uppercase">Ngày Tạo</th>
                    <th class="px-6 py-4 text-xs font-semibold tracking-wider text-gray-600 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($users as $user)
                    <tr class="transition-colors duration-200 hover:bg-gray-100">
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $user->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $user->email }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{ $user->created_at->format('d-m-Y') }}</td>
                        <td class="px-6 py-4 text-sm">
                            <a href="{{ route('users.edit', $user->id) }}"
                                class="px-4 py-2 mr-2 text-sm font-semibold text-indigo-600 bg-indigo-100 rounded-md hover:bg-indigo-200">
                                Edit
                            </a>
                            <form action="{{ route('users.delete', $user->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="px-4 py-2 text-sm font-semibold text-red-600 bg-red-100 rounded-md hover:bg-red-200"
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng này không?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection