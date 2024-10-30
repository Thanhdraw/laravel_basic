@extends('layouts.admin') 

@section('content')

<div class="container mx-auto">
    <h1 class="mb-4 text-2xl font-bold">Dashboard</h1>
    <div class="grid grid-cols-3 gap-4">
        <div class="p-4 bg-white rounded-lg shadow">
            <h2 class="mb-2 text-lg font-medium">Total Users</h2>
            <p class="text-4xl font-bold">user</p>
        </div>
        <div class="p-4 bg-white rounded-lg shadow">
            <h2 class="mb-2 text-lg font-medium">New Users (30 days)</h2>
            <p class="text-4xl font-bold">asd</p>
        </div>
        <div class="p-4 bg-white rounded-lg shadow">
            <h2 class="mb-2 text-lg font-medium">Active Users (30 days)</h2>
            <p class="text-4xl font-bold">asdasd</p>
        </div>
    </div>
</div>


@endsection