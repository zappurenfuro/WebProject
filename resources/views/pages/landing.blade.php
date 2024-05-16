@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold mb-4">Welcome to WebProject</h1>
    <p class="text-lg mb-8">This is the landing page.</p>
    <a href="{{ route('informasi') }}" class="btn-primary">Let's Go!</a>
</div>
@endsection
