@extends('layouts.app')

@section('title', 'Forum')

@section('content')
    <div class="container-informasi">
        <h1 class="text-4xl font-bold mb-6">Forum</h1>
        <div class="tourism-info-container">
            @foreach($tourismInfos as $info)
                <div class="tourism-info-item">
                    <img src="{{ $info->image_url }}" alt="{{ $info->name }}">
                    <div class="info-content">
                        <h2>{{ $info->name }}</h2>
                        <p>{{ $info->description }}</p>
                        <p><strong>Location:</strong> {{ $info->location }}</p>
                        <a href="{{ route('chat', ['location' => $info->name]) }}" class="btn-primary">Discuss</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
