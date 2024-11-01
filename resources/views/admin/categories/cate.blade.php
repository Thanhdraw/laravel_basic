@extends('layouts.admin')

@section('content')
<div class="container p-4 mx-auto">
    <h1 class="mb-4 text-2xl font-bold">Categories</h1>
    <a href="#" class="px-4 py-2 text-white bg-blue-500 rounded">Create New Category</a>

    <ul class="mt-4">
        @foreach ($categories as $category)
            <li class="flex items-center justify-between py-2 border-b">
                <span class="text-lg">{{ $category->name }}</span>
                <div>
                    <a href="#" class="text-blue-500 hover:underline">Edit</a>
                    <form action="#" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="ml-2 text-red-500 hover:underline">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
@endsection