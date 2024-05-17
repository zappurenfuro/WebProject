@extends('layouts.app')

@section('title', 'Chat about ' . $location)

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-4xl font-bold mb-6">Discuss about {{ $location }}</h1>
        <div class="chat-container bg-gray-800 p-6 rounded-lg shadow-md w-full max-w-4xl">
            <!-- Display chat messages -->
            <div class="chat-messages mb-6">
                @foreach($messages as $message)
                    <div class="message bg-gray-700 p-4 mb-4 rounded-lg">
                        <strong class="text-blue-400">{{ $message->user_name }}:</strong> 
                        <span class="text-gray-300">{{ $message->message }}</span>
                    </div>
                @endforeach
            </div>
            <!-- Chat input form -->
            <form action="{{ route('chat.post', ['location' => $location]) }}" method="POST" class="flex items-center">
                @csrf
                <textarea name="message" placeholder="Write your message..." required class="chat-container"></textarea>
                <button type="submit" class="btn-forum">Send</button>
            </form>
        </div>
    </div>
@endsection
