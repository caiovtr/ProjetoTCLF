<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mdTime;
use App\Models\mdCampeonato;
use App\Models\mdTimeCampeonato;
use Illuminate\Support\Facades\DB;

class ControllerTimeCampeonato extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $TimeCampeonato;

    public function __construct(mdTimeCampeonato $item){
        $this->TimeCampeonato = $item;
    }

    public function index($id)
    {
        $dados = mdCampeonato::find($id);
        $timesCampeonato = mdTimeCampeonato::where('campeonato_id', $id)->get();
       
        foreach($timesCampeonato as $item){
            $time = mdTime::find($item->time_id);
            $item->idTime = $time->id;
            $item->nomeTime = $time->Nome;
        }
        /*
        $campeonato = mdCampeonato::find($id);
        $dados->Nome = $campeonato->Nome;
        foreach($dados as $item){
            $time = mdTime::find($item->time_id);
            $item->Nome = $time->Nome;
        }
        */
        return view('exibeTimesCampeonato', compact('dados', 'timesCampeonato'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $dados = mdCampeonato::find($id);
        $times = mdTime::all();
        return view('novoTimeCampeonato', compact('dados','times'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new mdTimeCampeonato();
        $dados->time_id = $request->input('time');
        $dados->campeonato_id = $request->input('campeonato_id');
        if($dados->save())
            return redirect('/campeonato')->with('success', 'Time do campeonato cadastrado com sucesso!!');
        return redirect('/campeonato')->with('danger', 'Erro ao cadastrar time do campeonato!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $idC, $idT)
    {
        $dados = mdTimeCampeonato::where('campeonato_id', $idC)->where('time_id', $idT)->delete();
        return redirect('/campeonato')->with('success', 'Time do campeonato deletado com sucesso!!');
    }
}