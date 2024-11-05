@extends('layouts.admin')

@section('content')
<div class="max-w-2xl p-8 mx-auto mt-10 bg-white rounded-lg shadow-md">
    <h2 class="mb-6 text-2xl font-bold">Edit Category - id:{{$category->id}}</h2>

    @if(session('success'))
        <div class="px-4 py-2 mb-4 text-green-700 bg-green-100 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('categories.update', $category->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}"
                class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                required>
            @error('name')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Update Category
        </button>

        <button type="button" onclick="confirmCancel()"
            class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-gray-400 border border-transparent rounded-md shadow-sm hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
            Cancel
        </button>
    </form>
</div>
<script>
    function confirmCancel() {
        if (confirm('Are you sure you want to cancel? Any unsaved changes will be lost.')) {
            window.location.href = "{{ route('admin.categories.index') }}"; // Đổi route này về trang danh sách categories của bạn
        }
    }
</script>
@endsection