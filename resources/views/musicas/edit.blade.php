@extends('layouts.app')

@section('content')
    <h1>Editar Música</h1>
    <form action="{{ route('musicas.update', $musica->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <input type="text" name="nome" value="{{ $musica->nome }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <input type="text" name="artista" value="{{ $musica->artista }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <input type="text" name="palco" value="{{ $musica->palco }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <input type="date" name="data_show" value="{{ $musica->data_show }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <textarea name="anotacoes" class="form-control">{{ $musica->anotacoes }}</textarea>
        </div>
        <button type="submit" class="btn btn-warning">Atualizar</button>
    </form>
@endsection
