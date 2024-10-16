@extends('layouts.app')

@section('content')
    <h1>Adicionar Música</h1>
    <form action="{{ route('musicas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="text" name="nome" placeholder="Nome da Música" class="form-control" required>
        </div>
        <div class="mb-3">
            <input type="text" name="artista" placeholder="Artista" class="form-control" required>
        </div>
        <div class="mb-3">
            <input type="text" name="palco" placeholder="Palco" class="form-control" required>
        </div>
        <div class="mb-3">
            <input type="date" name="data_show" class="form-control" required>
        </div>
        <div class="mb-3">
            <textarea name="anotacoes" placeholder="Anotações" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
@endsection
