@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ $musica->nome }} - {{ $musica->artista }}</h1>
        </div>
        <div class="card-body">
            <p><strong>Palco:</strong> {{ $musica->palco }}</p>
            <p><strong>Data do Show:</strong> {{ \Carbon\Carbon::parse($musica->data_show)->format('d/m/Y') }}</p>
            <p><strong>Anotações:</strong> {{ $musica->anotacoes }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('musicas.edit', $musica->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('musicas.destroy', $musica->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Remover</button>
            </form>
            <a href="{{ route('musicas.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
@endsection
