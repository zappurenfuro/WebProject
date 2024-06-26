@extends('layouts.app')

@section('title', 'Rekomendasi Wisata')

@section('content')
    <div class="container-informasi">
        <h1 class="text-4xl font-bold mb-6">Rekomendasi Wisata</h1>
        <div class="tourism-info-container">
            @foreach($recommendations as $recommendation)
                <div class="tourism-info-item">
                <img src="{{ $recommendation->image_url }}" alt="{{ $recommendation->name }}">
                <div class="info-content">
                        <h2>{{ $recommendation->name }}</h2>
                        <p>{{ $recommendation->description }}</p>
                        <a href="{{ route('book', ['destination' => $recommendation->name]) }}" class="btn-primary" target="_blank">Book Now</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection