<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PessoaSepultada;

class PessoaSepultadaController extends Controller
{
    public function index()
    {
        $pessoas = PessoaSepultada::all();
        return view('pessoa_sepultada.index', compact('pessoas'));
    }

    public function create()
    {
        return view('pessoa_sepultada.create');
    }

    public function store(Request $request)
    {
        PessoaSepultada::create([
            'nome' => $request->input('nome'),
            'data_nascimento' => $request->input('data_nascimento'),
            'data_falecimento' => $request->input('data_falecimento'),
            'local_sepulcro' => $request->input('local_sepulcro'),
        ]);
        return "Registro inserido";
    }

    public function edit(string $id)
    {
        $pessoa = PessoaSepultada::findOrFail($id);
        return view('pessoa_sepultada.edit', compact('pessoa'));
    }

    public function update(Request $request, string $id)
    {
        $pessoa = PessoaSepultada::findOrFail($id);
        $pessoa->update([
            'nome' => $request->input('nome'),
            'data_nascimento' => $request->input('data_nascimento'),
            'data_falecimento' => $request->input('data_falecimento'),
            'local_sepulcro' => $request->input('local_sepulcro'),
        ]);
        return "Registro alterado com sucesso";
    }

    public function destroy(string $id)
    {
        $pessoa = PessoaSepultada::findOrFail($id);
        $pessoa->delete();
        return "Registro excluído com sucesso";
    }

    public function delete(string $id)
    {
        $pessoa = PessoaSepultada::findOrFail($id);
        return view('pessoa_sepultada.delete', compact('pessoa'));
    }
}
