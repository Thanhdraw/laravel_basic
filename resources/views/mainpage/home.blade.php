@extends('layouts.app') 

@section('content')
<main class="my-8">
    <div class="container px-6 mx-auto">
        <h3 class="text-2xl font-medium text-gray-700">Sản phẩm mới</h3>
        <span class="mt-3 text-sm text-gray-500">200+ Sản phẩm</span>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <!-- Product item -->
            <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                <div class="flex items-end justify-end w-full h-56 bg-cover"
                    style="background-image: url('https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
                    <button
                        class="p-2 mx-5 -mb-4 text-white bg-blue-600 rounded-full hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                        <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase">Đồng hồ cổ điển</h3>
                    <span class="mt-2 text-gray-500">$123</span>
                </div>
            </div>
            <!-- More product items... -->
        </div>
    </div>
</main>
@endsection