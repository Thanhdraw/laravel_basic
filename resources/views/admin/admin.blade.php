
@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
    <p>Welcome back, {{ auth()->user()->name??"no name" }}!</p>
</div>
@endsection