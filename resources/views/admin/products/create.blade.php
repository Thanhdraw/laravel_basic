@extends('layouts.admin')

@section('content')
<div class="max-w-2xl py-8 mx-auto">
    <h1 class="mb-4 text-2xl font-bold">Tạo Sản Phẩm Mới</h1>

    @if(session('success'))
        <div class="px-4 py-2 mb-4 text-green-700 bg-green-100 rounded">
            {{ session('success') }}
        </div>
        <div class="px-4 py-2 mb-4 text-green-700 bg-green-100 rounded">
            {{ session('fail') }}
        </div>
    @endif

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block mb-1 font-medium">Tên:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                class="w-full px-3 py-2 border border-gray-300 rounded">
        </div>

        <div>
            <label for="description" class="block mb-1 font-medium">Mô tả:</label>
            <textarea id="description" name="description" required
                class="w-full px-3 py-2 border border-gray-300 rounded">{{ old('description') }}</textarea>
        </div>

        <div>
            <label for="price" class="block mb-1 font-medium">Giá:</label>
            <input type="number" id="price" name="price" value="{{ old('price') }}" step="0.01" required
                class="w-full px-3 py-2 border border-gray-300 rounded">
        </div>

        <div>
            <label for="image" class="block mb-1 font-medium">URL ảnh:</label>
            <input type="text" id="image" name="image" placeholder="Nhập URL ảnh" value="{{ old('image') }}" required
                class="w-full px-3 py-2 border border-gray-300 rounded">
        </div>

        <div>
            <label for="category_id" class="block mb-1 font-medium">Danh mục:</label>
            <select id="category_id" name="category_id" required
                class="w-full px-3 py-2 border border-gray-300 rounded">
                <option value="">Chọn danh mục</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Tạo Sản Phẩm</button>
    </form>
</div>
@endsection