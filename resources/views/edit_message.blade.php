@extends('layouts.app')

@section('title', 'Edit Message')

@section('content')
    <div class="container">
        <h1 class="text-4xl font-bold mb-6">Edit Message</h1>
        <form action="{{ route('message.update', $message->id) }}" method="POST" class="bg-gray-800 p-6 rounded">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="message" class="block text-gray-400">Message</label>
                
                <textarea name="message" id="message" class="chat-container">{{ $message->message }}</textarea>
            </div>
            <button type="submit" class="btn-primary">Update</button>
        </form>
    </div>
@endsection
