@extends('layouts.app')

@section('content')
    <h1>Músicas</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Nome</th>
                <th>Artista</th>
                <th>Palco</th>
                <th>Data do Show</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($musicas as $musica)
                <tr>
                    <td>{{ $musica->nome }}</td>
                    <td>{{ $musica->artista }}</td>
                    <td>{{ $musica->palco }}</td>
                    <td>{{ $musica->data_show }}</td>
                    <td>
                        <a href="{{ route('musicas.show', $musica->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('musicas.edit', $musica->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('musicas.destroy', $musica->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Remover</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('musicas.create') }}" class="btn btn-success">Adicionar Música</a>
@endsection
