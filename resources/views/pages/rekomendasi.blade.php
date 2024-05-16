@extends('layouts.app')

@section('title', 'Rekomendasi Wisata')

@section('content')
    <div class="container">
        <h1 class="text-4xl font-bold mb-6">Rekomendasi Wisata</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($recommendations as $recommendation)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ $recommendation->image_url }}" alt="{{ $recommendation->name }}" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold">{{ $recommendation->name }}</h2>
                        <p class="mt-2 text-gray-600">{{ $recommendation->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
