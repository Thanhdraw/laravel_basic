@extends('layouts.admin')

@section('content')
<div class="container max-w-6xl px-4 py-8 mx-auto">
    {{-- Header Section --}}
    <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Categories</h1>
        <a href="{{ route('categories.create') }}"
            class="inline-flex items-center px-4 py-2 font-medium text-white transition-colors duration-200 bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 shadow-sm w-full sm:w-auto justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                    clip-rule="evenodd" />
            </svg>
            Create New Category
        </a>
    </div>

    {{-- Search Section --}}
    <div class="mb-6">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <input type="text" wire:model="search"
                class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                placeholder="Search categories...">
        </div>
    </div>

    {{-- Categories List --}}
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <ul class="divide-y divide-gray-200">
            @foreach ($categories as $category)
                <li class="transition-colors duration-150 hover:bg-gray-50">
                    <div class="flex items-center justify-between px-6 py-4">
                        <div class="flex items-center min-w-0">
                            <span class="text-sm font-medium text-gray-500 mr-3">#{{ $category->id }}</span>
                            <span class="text-lg font-medium text-gray-900 truncate">{{ $category->name }}</span>
                        </div>
                        
                        <div class="flex items-center space-x-3 ml-4">
                            <a href="{{ route('categories.edit', $category->id) }}"
                                class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-indigo-600 transition-colors duration-150 hover:text-indigo-800 hover:bg-indigo-50 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1.5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg>
                                Edit
                            </a>
                            
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-red-600 transition-colors duration-150 hover:text-red-800 hover:bg-red-50 rounded-md"
                                    onclick="return confirm('Are you sure you want to delete this category?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1.5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
            @endforeach

            @if(count($categories) === 0)
                <li class="px-6 py-8">
                    <div class="text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">No categories found</h3>
                        <p class="mt-1 text-sm text-gray-500">Get started by creating a new category.</p>
                    </div>
                </li>
            @endif
        </ul>
    </div>
</div>
@endsection