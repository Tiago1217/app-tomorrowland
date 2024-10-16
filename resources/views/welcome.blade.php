@extends('layouts.app')

@section('content')
    <div class="text-center mt-5">
        <h1 class="display-4">Bem-vindo ao Tomorrowland App!</h1>
        <p class="lead">Experimente a magia da música e da diversão!</p>
        
        <div class="video-container my-4" style="border: 5px solid #343a40; border-radius: 10px; overflow: hidden;">
            <video width="100%" controls>
                <source src="{{ asset('videos/tomorrow.mp4') }}" type="video/mp4">
                Seu navegador não suporta a tag de vídeo.
            </video>
        </div>

        <div class="mt-4">
            <a href="{{ route('musicas.index') }}" class="btn btn-primary btn-lg">Ver Músicas</a>
            <a href="{{ route('musicas.create') }}" class="btn btn-success btn-lg">Adicionar Música</a>
        </div>
    </div>
@endsection
