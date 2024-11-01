@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Products Management</h1>
    <a href="#" class="btn btn-primary">Add New Product</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>
                        @if($product->image)
                            <img src="#" width="50">
                        @endif
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name ?? 'No Category' }}</td>
                    <td>{{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <span class="badge {{ $product->status ? 'bg-success' : 'bg-danger' }}">
                            {{ $product->status ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td>
                        <!-- Chỉ giữ lại các nút cần thiết -->
                        <span>View</span> <!-- Có thể thêm link đến trang chi tiết sản phẩm nếu cần -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $products->links() }} <!-- Phân trang nếu có -->
</div>
@endsection