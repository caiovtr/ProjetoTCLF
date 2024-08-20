<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mdTime;

class ControllerTime extends Controller
{
    public function index()
    {
        $dados = mdTime::all();
        return view('exibeTimes', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoTime');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new mdTime();
        $dados->Nome = $request->input('nome');
        $dados->Pais = $request->input('pais');
        if($dados->save())
            return redirect('/time')->with('success', 'time cadastrado com sucesso!!');
        return redirect('/time')->with('danger', 'Erro ao cadastrar time!');
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
        $dados = mdTime::find($id);
        if(isset($dados))
            return view('editaTime', compact('dados'));
        return redirect('/time')->with('danger', 'Cadastro do time não localizado!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = mdTime::find($id);
        if(isset($dados)){
            $dados->Nome = $request->input('nome');
            $dados->Pais = $request->input('pais');
            $dados->save();
            return redirect('/time')->with('success', 'Cadastro do time atualizado com sucesso!!');
        }
        return redirect('/time')->with('danger', 'Cadastro de time não localizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = mdTime::find($id);
        if(isset($dados)){
            $times = mdTimeJogador::where('time_id', '=', $id)->first();
            if(!isset($times)){
                $dados->delete();
                return redirect('/time')->with('success', 'Cadastro do time deletado com sucesso!!');
            }else{
                return redirect('/time')->with('danger', 'Cadastro não pode ser excluído!!');
            } 
        }else{
            return redirect('/time')->with('danger', 'Cadastro não localizado!!');
        } 
    }
}
