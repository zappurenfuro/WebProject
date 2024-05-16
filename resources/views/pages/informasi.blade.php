@extends('layouts.app')

@section('title', 'Informasi Wisata')

@section('content')
    <div class="container">
        <h1 class="text-4xl font-bold mb-6">Informasi Wisata</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($tourismInfos as $info)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ $info->image_url }}" alt="{{ $info->name }}" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold">{{ $info->name }}</h2>
                        <p class="mt-2 text-gray-600">{{ $info->description }}</p>
                        <p class="mt-2 text-gray-600"><strong>Location:</strong> {{ $info->location }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
