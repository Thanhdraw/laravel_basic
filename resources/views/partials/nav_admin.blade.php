<div class="container flex items-center justify-between mx-auto">
    <a href="{{ route('admin.index') }}" class="text-xl font-bold text-gray-800">Admin Dashboard</a>
    <div class="flex items-center space-x-4">
        <a href="{{route('admin.user')}}" class="text-gray-600 hover:text-gray-800">Users</a>
        <a href="{{ route('admin.categories.index') }}" class="text-gray-600 hover:text-gray-800">Category</a>
        <a href="{{ route('admin.products.index') }}" class="text-gray-600 hover:text-gray-800">Products</a>
        <a href="#" class="text-gray-600 hover:text-gray-800">Orders</a>

        <!-- Form đăng xuất -->
        <form action="#" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</div>