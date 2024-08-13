<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Time;
use App\Models\Campeonato;
use App\Models\TimeCampeonato;
use Illuminate\Support\Facades\DB;

class ControladorTimeCampeonato extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $TimeCampeonato;

    public function __construct(TimeCampeonato $item){
        $this->TimeCampeonato = $item;
    }

    public function index($id)
    {
        $dados = $this->TimeCampeonato->where('campeonato_id', $id)->get();
        $campeonato = Campeonato::find($id);
        $dados->Nome = $campeonato->Nome;
        foreach($dados as $item){
            $time = Time::find($item->time_id);
            $item->Nome = $time->Nome;
        }
        return view('exibeTimesCampeonato', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new TimeCampeonato();
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
    public function destroy(string $id)
    {
        $dados = TimeCampeonato::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/campeonato')->with('success', 'Time do campeonato deletado com sucesso!!');
        }
        return redirect('/campeonato')->with('danger', 'Erro ao deletar time do campeonato!');
    }
}