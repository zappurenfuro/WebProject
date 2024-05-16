@extends('layouts.app')

@section('title', 'Settings')

@section('content')
<div class="container">
    <h1 class="text-4xl font-bold mb-6">Settings</h1>
    <form action="{{ route('settings.update') }}" method="POST" class="bg-gray-800 p-6 rounded">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-400">Name</label>
            <input type="text" name="name" id="name" value="{{ auth()->user()->name }}" class="w-full bg-gray-700 text-white border-none rounded py-2 px-4">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-400">Email</label>
            <input type="email" name="email" id="email" value="{{ auth()->user()->email }}" class="w-full bg-gray-700 text-white border-none rounded py-2 px-4">
        </div>
        <div class="mb-4">
            <label for="category" class="block text-gray-400">Preferred Category</label>
            <select name="category" id="category" class="w-full bg-gray-700 text-white border-none rounded py-2 px-4">
            <option value="mountain" {{ auth()->user()->preferences->firstWhere('category', 'mountain') ? 'selected' : '' }}>Mountain</option>
                    <option value="beach" {{ auth()->user()->preferences->firstWhere('category', 'beach') ? 'selected' : '' }}>Beach</option>
                    <option value="city" {{ auth()->user()->preferences->firstWhere('category', 'city') ? 'selected' : '' }}>City</option>
                <!-- Tambahkan kategori lainnya -->
            </select>
        </div>
        <button type="submit" class="bg-teal-500 text-white py-2 px-4 rounded">Update</button>
    </form>
</div>
@endsection