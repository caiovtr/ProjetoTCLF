<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCampeonato extends Controller
{
    public function index()
    {
        $dados = Campeonato::all();
        return view('exibeCampeonatos', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoCampeonato');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Campeonato();
        $dados->Nome = $request->input('nome');
        $dados->Tipo = $request->input('tipo');
        if($dados->save())
            return redirect('/campeonato')->with('success', 'Campeonato cadastrado com sucesso!!');
        return redirect('/campeonato')->with('danger', 'Erro ao cadastrar campeonato!');
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
        $dados = Campeonato::find($id);
        if(isset($dados))
            return view('editaCampeonato', compact('dados'));
        return redirect('/campeonato')->with('danger', 'Cadastro do campeonato não localizado!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Campeonato::find($id);
        if(isset($dados)){
            $dados->Nome = $request->input('nome');
            $dados->Tipo = $request->input('tipo');
            $dados->save();
            return redirect('/campeonato')->with('success', 'Cadastro do campeonato atualizado com sucesso!!');
        }
        return redirect('/campeonato')->with('danger', 'Cadastro de campeonato não localizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Campeonato::find($id);
        if(isset($dados)){
            $times = TimeCampeonato::where('campeonato_id', '=', $id)->first();
            if(!isset($times)){
                $dados->delete();
                return redirect('/campeonato')->with('success', 'Cadastro do campeonato deletado com sucesso!!');
            }else{
                return redirect('/campeonato')->with('danger', 'Cadastro não pode ser excluído!!');
            } 
        }else{
            return redirect('/campeonato')->with('danger', 'Cadastro não localizado!!');
        } 
    }
}
