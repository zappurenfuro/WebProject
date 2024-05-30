@extends('layouts.app')

@section('title', 'Chat about ' . $location)

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-4xl font-bold mb-6">Discuss about {{ $location }}</h1>
        <div class="chat-container bg-gray-800 p-6 rounded-lg shadow-md w-full max-w-4xl">
            <div class="chat-messages mb-6">
                @foreach($messages as $message)
                    <div class="message bg-gray-700 p-4 mb-4 rounded-lg flex justify-between items-center">
                        <div>
                            <strong class="text-blue-400">{{ $message->user_name }}:</strong> 
                            <span class="text-gray-300">{{ $message->message }}</span>
                        </div>
                        @if(Auth::id() == $message->user_id)
                            <div class="buttons-container">
                                <a href="{{ route('message.edit', $message->id) }}" class="btn-primary-edit">Edit</a>
                                <form action="{{ route('message.delete', $message->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-primary-delete">Delete</button>
                                </form>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
            <form action="{{ route('chat.post', ['location' => $location]) }}" method="POST" class="flex items-center">
                @csrf
                <textarea name="message" placeholder="Write your message..." required class="chat-container"></textarea>
                <button type="submit" class="btn-primary">Send</button>
            </form>
        </div>
    </div>
@endsection
