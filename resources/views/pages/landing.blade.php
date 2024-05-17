@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')
<div class="landing-page">
    <div>
        <h1 class="landing-page-h1">Welcome to WebProject</h1>
        <p class="landing-page-p">Start your adventure.</p>
        <a href="{{ route('informasi') }}" class="btn-primary">Let's Go!</a>
    </div>
</div>
@endsection
