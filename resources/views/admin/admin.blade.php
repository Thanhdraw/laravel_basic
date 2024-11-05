@extends('layouts.admin')

@section('content')
<div class="container px-4 py-8 mx-auto">
    <h1 class="mb-4 text-2xl font-bold">Dashboard</h1>
    <p>Welcome back , <b>{{ Auth::user()->name ?? 'Guest' }} </b></p>
</div>
@endsection