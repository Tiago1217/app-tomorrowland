<?php

namespace App\Http\Controllers;

use App\Models\Musica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MusicaController extends Controller
{
    // Mostrar lista de músicas
    public function index()
    {
        $musicas = Musica::all();
        return view('musicas.index', compact('musicas'));
    }

    // Mostrar tela de cadastro de músicas
    public function create()
    {
        return view('musicas.create');
    }

    // Cadastrar músicas
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'string|required',
            'artista' => 'string|required',
            'palco' => 'string|required',
            'data_show' => 'date|required',
        ]);

        Musica::create($request->all());
        return Redirect::route('musicas.index')->with('success', 'Música adicionada com sucesso!');
    }

    // Mostrar música por ID
    public function show(Musica $musica)
    {
        return view('musicas.show', compact('musica'));
    }

    // Mostrar tela de edição
    public function edit(Musica $musica)
    {
        return view('musicas.edit', compact('musica'));
    }

    // Atualizar música
    public function update(Request $request, Musica $musica)
    {
        $request->validate([
            'nome' => 'string|required',
            'artista' => 'string|required',
            'palco' => 'string|required',
            'data_show' => 'date|required',
        ]);

        $musica->update($request->all());
        return Redirect::route('musicas.index')->with('success', 'Música atualizada com sucesso!');
    }

    // Remover música
    public function destroy(Musica $musica)
    {
        $musica->delete();
        return Redirect::route('musicas.index')->with('success', 'Música removida com sucesso!');
    }
}
