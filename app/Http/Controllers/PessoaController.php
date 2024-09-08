<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    public function create()
    {
        return view('site/formulario');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|digits:11|unique:pessoa',
            'telefone' => 'required|string|max:15',
        ],[
            'cpf.digits' => 'O campo "CPF" deve conter exatamente 11 digitos! Tente novamente'
            ]

        );

        Pessoa::create($request->all());

        return redirect()->route('pessoa.create')->with('success', 'Pessoa cadastrada com sucesso!');
    }

    public function index()
    {
        $pessoas = Pessoa::all();
        return view('site/pessoas.index', compact('pessoas'));
    }
}
