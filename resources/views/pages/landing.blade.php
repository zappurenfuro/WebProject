@extends('layouts.app')

@section('title', 'NusantaraExplore')

@section('content')
<div class="landing-page">
    <div>
        <h1 class="landing-page-h1">Nusantara Explore</h1>
        <p class="landing-page-p">Experience the Extraordinary</p>
        <a href="{{ route('informasi') }}" class="btn-register">Let's Go!</a>
    </div>
</div>
@endsection
