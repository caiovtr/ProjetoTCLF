<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mdJogador;

class ControllerJogador extends Controller
{
    public function index()
    {
        $dados = mdJogador::all();
        return view('exibeJogadores', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoJogador');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new mdJogador();
        $dados->Nome = $request->input('nome');
        $dados->Posicao = $request->input('posicao');
        $dados->Idade = $request->input('idade');
        $dados->Numero = $request->input('numero');
        if($dados->save())
            return redirect('/jogador')->with('success', 'Jogador cadastrado com sucesso!!');
        return redirect('/jogador')->with('danger', 'Erro ao cadastrar jogador!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dados = mdJogador::find($id);
        if(isset($dados))
            return view('editaJogador', compact('dados'));
        return redirect('/jogador')->with('danger', 'Cadastro do jogador não localizado!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = mdJogador::find($id);
        if(isset($dados)){
            $dados->Nome = $request->input('nome');
            $dados->Posicao = $request->input('posicao');
            $dados->Idade = $request->input('idade');
            $dados->Numero = $request->input('numero');
            $dados->save();
            return redirect('/jogador')->with('success', 'Cadastro do jogador atualizado com sucesso!!');
        }
        return redirect('/jogador')->with('danger', 'Cadastro de jogador não localizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = mdJogador::find($id);
        if(isset($dados)){
            $jogadores = mdTimeJogador::where('jogador_id', '=', $id)->first();
            if(!isset($jogadores)){
                $dados->delete();
                return redirect('/jogador')->with('success', 'Cadastro do jogador deletado com sucesso!!');
            }else{
                return redirect('/jogador')->with('danger', 'Cadastro não pode ser excluído!!');
            } 
        }else{
            return redirect('/jogador')->with('danger', 'Cadastro não localizado!!');
        } 
    }
}
