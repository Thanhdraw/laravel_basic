<div class="container flex items-center justify-between mx-auto">
    <a href="{{ route('admin.index') }}" class="text-xl font-bold text-gray-800">Admin Dashboard</a>
    <div class="flex items-center space-x-4">
        <a href="{{ route('admin.user') }}" class="text-gray-600 hover:text-gray-800">Users</a>
        <a href="{{ route('admin.categories.index') }}" class="text-gray-600 hover:text-gray-800">Category</a>
        <a href="{{ route('admin.products.index') }}" class="text-gray-600 hover:text-gray-800">Products</a>
        <a href="#" class="text-gray-600 hover:text-gray-800">Orders</a>

        <!-- Dropdown menu cho Login và Register -->
        <div id="auth-dropdown" class="relative" style="display: none;">
            <button class="text-gray-600 hover:text-gray-800 focus:outline-none" onclick="toggleDropdown()">
                Account
            </button>
            <div id="dropdown-menu" class="absolute right-0 z-10 hidden w-40 py-2 mt-2 bg-white rounded-md shadow-lg">
                <a href="{{ route('admin.login') }}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">Login</a>
                <a href="{{ route('admin.register') }}"
                    class="block px-4 py-2 text-gray-600 hover:bg-gray-100">Register</a>
                <a href="{{ route('admin.logout') }}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">Logout</a>
            </div>
        </div>

        <!-- Form đăng xuất khi người dùng đã đăng nhập -->

    </div>
</div>

<script>
    // Kiểm tra trạng thái đăng nhập từ server-side
    const isLoggedIn = {{ auth()->check() ? 'true' : 'false' }};

    document.addEventListener('DOMContentLoaded', function () {
        const authDropdown = document.getElementById('auth-dropdown');
        const logoutForm = document.getElementById('logout-form');

        if (isLoggedIn === 'true') {
            // Nếu đã đăng nhập, chỉ hiển thị form logout
            logoutForm.style.display = 'block';
            authDropdown.style.display = 'none';
        } else {
            // Nếu chưa đăng nhập, hiển thị dropdown auth
            authDropdown.style.display = 'block';
            logoutForm.style.display = 'none';
        }
    });

    // Toggle dropdown khi nhấn vào "Account"
    function toggleDropdown() {
        const dropdownMenu = document.getElementById('dropdown-menu');
        dropdownMenu.classList.toggle('hidden');
    }

    // Ẩn dropdown khi nhấn ngoài nó
    document.addEventListener('click', function (event) {
        const dropdownMenu = document.getElementById('dropdown-menu');
        const authDropdown = document.getElementById('auth-dropdown');

        if (!authDropdown.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });
</script>