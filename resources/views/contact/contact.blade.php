@extends('layouts.app');







@section('content')
@if(session('success'))
    <div class="relative px-4 py-3 text-green-700 bg-green-100 border border-green-400 rounded" role="alert">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="relative px-4 py-3 text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<body class="bg-gray-100">
    <div class="container px-4 py-8 mx-auto">
        <h1 class="mb-8 text-3xl font-bold text-center">{{$title}}</h1>
        <div class="max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-lg">
            <form class="p-6" method="POST" action="{{ route('contact.submit') }}">
                @csrf
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="name">
                        Họ và tên
                    </label>
                    <input
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        id="name" name="name" type="text" placeholder="Nguyễn Văn A">
                </div>
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                        Email
                    </label>
                    <input
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        id="email" name="email" type="email" placeholder="example@example.com">
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="message">
                        Tin nhắn
                    </label>
                    <textarea
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        id="message" name="message" rows="4" type="text"
                        placeholder="Nhập tin nhắn của bạn ở đây"></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                        type="submit">
                        Gửi
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

@endsection