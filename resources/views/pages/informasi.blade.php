@extends('layouts.app')

@section('title', 'Informasi Wisata')

@section('content')
    <div class="container">
        <h1 class="text-4xl font-bold mb-6">Informasi Wisata</h1>
        <div class="tourism-info-container">
            @foreach($tourismInfos as $info)
                <div class="tourism-info-item">
                    <img src="{{ $info->image_url }}" alt="{{ $info->name }}">
                    <div class="info-content">
                        <h2>{{ $info->name }}</h2>
                        <p>{{ $info->description }}</p>
                        <p><strong>Location:</strong> {{ $info->location }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection