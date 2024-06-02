@extends('layouts.app')

@section('title', 'Informasi Wisata')

@section('content')
    <div class="container-informasi">
        <h1 class="text-4xl font-bold mb-6">Informasi Wisata</h1>
        <div class="tourism-info-container">
            @foreach($tourismInfos as $info)
                <div class="tourism-info-item">
                    <img src="{{ $info->image_url }}" alt="{{ $info->name }}">
                    <div class="info-content">
                        <h2><a href="#" class="name-link" data-id="{{ $info->id }}">{{ $info->name }}</a></h2>
                        <p>{{ $info->description }}</p>
                        <p><strong>Location:</strong> {{ $info->location }}</p>
                        <a href="{{ route('book', ['destination' => $info->name]) }}" class="btn-primary" target="_blank">Book Now</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal -->
    <div id="longDescriptionModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 class="modal-title">Detail Informasi</h2>
            <div id="long-description-content"></div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById("longDescriptionModal");
            var span = document.getElementsByClassName("close")[0];

            document.querySelectorAll('.name-link').forEach(function(element) {
                element.onclick = function() {
                    var id = this.getAttribute('data-id');
                    fetch('/tourism_info/' + id)
                        .then(response => response.json())
                        .then(data => {
                            document.getElementById('long-description-content').innerHTML = data.long_description;
                            modal.style.display = "block";
                        });
                };
            });

            span.onclick = function() {
                modal.style.display = "none";
            };

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            };
        });
    </script>
@endsection
