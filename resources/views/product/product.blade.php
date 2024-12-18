@extends('layouts.app') 

@section('content')
<main>
    <div class="">
        <div class="max-w-2xl px-4 py-16 mx-auto sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>

            <div class="grid grid-cols-1 mt-6 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                <div class="relative group">
                    <div
                        class="w-full overflow-hidden bg-gray-200 rounded-md shadow-2xl aspect-h-1 aspect-w-1 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg"
                            alt="Front of men&#039;s Basic Tee in black."
                            class="object-cover object-center w-full h-full lg:h-full lg:w-full">
                    </div>
                    <div class="flex justify-between mt-4">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Basic Tee
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Black</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$35</p>
                    </div>
                </div>
                @foreach ($products as $product)
                    <div class="relative group">

                        <div
                            class="w-full overflow-hidden bg-gray-200 rounded-md shadow-2xl aspect-h-1 aspect-w-1 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="{{$product['image']}}" alt="Front of men&#039;s Basic Tee in black."
                                class="object-cover object-center w-full h-full lg:h-full lg:w-full">
                        </div>
                        <div class="flex justify-between mt-4">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{$product['name']}}
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Black</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">$35</p>
                        </div>

                    </div>
                @endforeach
                <!-- More products... -->
            </div>

        </div>
</main>

</div>
@endsection