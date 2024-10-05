@extends('layouts.app')

@section('content')
<main>

    <section class="py-8 antialiased text-gray-900 bg-slate-200 md:py-16">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <div class="flex items-center justify-between gap-4 mb-4 md:mb-8">
                <h2 class="text-xl font-semibold text-gray-900 sm:text-2xl">Shop by category</h2>

                <a href="#" title=""
                    class="flex items-center text-base font-medium text-primary-700 hover:underline dark:text-primary-500">
                    See more categories
                    <svg class="w-5 h-5 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 12H5m14 0-4 4m4-4-4-4" />
                    </svg>
                </a>
            </div>

            <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($categories as $catergory)
                    <a href="#"
                        class="flex items-center px-4 py-2 bg-white border border-gray-200 rounded-lg hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <svg class="w-4 h-4 text-gray-900 me-2 shrink-0 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z">
                            </path>
                        </svg>
                        <span class="text-sm font-medium text-gray-900 dark:text-white">{{$catergory['name']}}</span>
                    </a>
                @endforeach

            </div>
        </div>
    </section>
</main>
@endsection