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
            <select name="category" id="category" class="input-field">
                <option value="mountain" {{ auth()->user()->preferences->firstWhere('category', 'mountain') ? 'selected' : '' }}>Mountain</option>
                <option value="beach" {{ auth()->user()->preferences->firstWhere('category', 'beach') ? 'selected' : '' }}>Beach</option>
                <option value="city" {{ auth()->user()->preferences->firstWhere('category', 'city') ? 'selected' : '' }}>City</option>
                <option value="island" {{ auth()->user()->preferences->firstWhere('category', 'island') ? 'selected' : '' }}>Island</option>
                <option value="cultural" {{ auth()->user()->preferences->firstWhere('category', 'cultural') ? 'selected' : '' }}>Cultural</option>
            </select>
        </div>
        <button type="submit">Update</button>
    </form>

    <form action="{{ route('account.delete') }}" method="POST" class="mt-6 bg-gray-800 p-6 rounded">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn-delete">Delete Account</button>
    </form>
</div>
@endsection
