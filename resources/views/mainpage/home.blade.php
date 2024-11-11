@extends('layouts.app')

@section('content')
<div class="bg-gray-100 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- iPhone section -->
        <div class="mb-12">
            <h3 class="text-2xl font-bold text-gray-800 mb-3">iPhone</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- iPhone product items -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-56 bg-cover bg-center" style="background-image: url('https://via.placeholder.com/300x400')">
                        <button class="bg-blue-600 hover:bg-blue-500 focus:outline-none focus:bg-blue-500 text-white p-2 rounded-full mx-5 -mb-4">
                            <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="p-5">
                        <h3 class="text-gray-700 uppercase text-lg">iPhone 12</h3>
                        <span class="text-gray-500 text-sm">$799</span>
                    </div>
                </div>
                <!-- More iPhone product items... -->
            </div>
        </div>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

        <!-- iPad section -->
        <div class="mb-12">
            <h3 class="text-2xl font-bold text-gray-800 mb-3">iPad</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- iPad product items -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-56 bg-cover bg-center" style="background-image: url('https://via.placeholder.com/300x400')">
                        <button class="bg-blue-600 hover:bg-blue-500 focus:outline-none focus:bg-blue-500 text-white p-2 rounded-full mx-5 -mb-4">
                            <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="p-5">
                        <h3 class="text-gray-700 uppercase text-lg">iPad Pro</h3>
                        <span class="text-gray-500 text-sm">$799</span>
                    </div>
                </div>
                <!-- More iPad product items... -->
            </div>
        </div>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

        <!-- Apple Watch section -->
        <div class="mb-12">
            <h3 class="text-2xl font-bold text-gray-800 mb-3">Apple Watch</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Apple Watch product items -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-56 bg-cover bg-center" style="background-image: url('https://via.placeholder.com/300x400')">
                        <button class="bg-blue-600 hover:bg-blue-500 focus:outline-none focus:bg-blue-500 text-white p-2 rounded-full mx-5 -mb-4">
                            <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="p-5">
                        <h3 class="text-gray-700 uppercase text-lg">Apple Watch Series 6</h3>
                        <span class="text-gray-500 text-sm">$399</span>
                    </div>
                </div>
                <!-- More Apple Watch product items... -->
            </div>
        </div>
    </div>
</div>

@endsection