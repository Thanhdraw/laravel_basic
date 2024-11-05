@extends('layouts.admin')

@section('content')
<div class="container max-w-6xl px-4 py-8 mx-auto">
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Categories</h1>
        <a href="{{route('categories.create')}}"
            class="inline-flex items-center px-4 py-2 font-medium text-white transition-colors duration-200 bg-blue-600 rounded-lg hover:bg-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                    clip-rule="evenodd" />
            </svg>
            Create New Category
        </a>
    </div>
    <td>


        <input type="text" wire:model="search" placeholder="Search..."
            class="px-4 py-2 border rounded-md focus:outline-none focus:border-indigo-500">


    </td>
    <div class="bg-white rounded-lg shadow-sm">

        <ul class="divide-y divide-gray-200">
            @foreach ($categories as $category)
                <li class="transition-colors duration-150 hover:bg-gray-50">
                    <div class="flex items-center justify-between px-6 py-4">
                        <div class="items-center space-x-3 ">
                            <span class="text-lg font-medium text-gray-900">{{ $category->id }}</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="text-lg font-medium text-gray-900">{{ $category->name }}</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <a href="{{ route('categories.edit', $category->id) }}"
                                class="text-sm font-medium text-blue-600 transition-colors duration-150 hover:text-blue-800">
                                <span class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                    </svg>
                                    Edit
                                </span>
                            </a>
                            <form action="{{route('categories.destroy', $category->id)}}" method="POST"
                                class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-sm font-medium text-red-600 transition-colors duration-150 hover:text-red-800"
                                    onclick="return confirm('Are you sure you want to delete this category?')">
                                    <span class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Delete
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection