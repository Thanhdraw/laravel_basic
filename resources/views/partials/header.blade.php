<header class="bg-white shadow-md">
    <div class="container px-6 py-3 mx-auto">
        <div class="flex items-center justify-between">
            <div class="w-full text-2xl font-semibold text-gray-700 md:text-center">
                PHY
            </div>

            <div class="w-full text-2xl font-semibold text-gray-700 md:text-center">
                {{$title ?? "WebSite - Bán hàng"}}
            </div>

            <div class="flex items-center justify-end w-full">
                <button @click="cartOpen = !cartOpen" class="mx-4 text-gray-600 focus:outline-none sm:mx-0">
                    <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                </button>

                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center text-gray-700 focus:outline-none">
                        <span class="mr-2">Tài khoản</span>
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false"
                        class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl">
                        <!-- Placeholder: Replace with actual authentication logic -->
                        @if (true) <!-- Replace with actual auth check -->
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Thông tin cá
                                nhân</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Đơn hàng của
                                tôi</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Đăng xuất</a>
                        @else
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Đăng nhập</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Đăng ký</a>
                        @endif
                    </div>
                </div>

                <div class="flex sm:hidden">
                    <button @click="isOpen = !isOpen" type="button"
                        class="text-gray-600 hover:text-gray-500 focus:outline-none focus:text-gray-500"
                        aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd"
                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <nav :class="isOpen ? '' : 'hidden'" class="mt-4 sm:flex sm:justify-center sm:items-center">
            <div class="flex flex-col sm:flex-row">
                <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/">Trang chủ</a>
                <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/shop">Sản phẩm</a>
                <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/category">Danh mục</a>
                <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/contact">Liên hệ</a>
                <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Về chúng tôi</a>
            </div>
        </nav>
        <div class="relative max-w-lg mx-auto mt-6">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </span>
            <input
                class="w-full py-2 pl-10 pr-4 border rounded-md focus:border-blue-500 focus:outline-none focus:shadow-outline"
                type="text" placeholder="Tìm kiếm">
        </div>
    </div>
</header>