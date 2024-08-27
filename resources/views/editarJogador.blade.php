@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">ATUALIZE OS DADOS DO JOGADOR</h1>
            </div>
        </div>
        <form action="/jogador/{{$dados->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" 
                       value="{{$dados->Nome}}">
            </div>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="idade" class="form-control" name="idade" 
                       value="{{$dados->Idade}}">
            </div>
            <div class="form-group">
                <label for="posicao">Posição:</label>
                <input type="posicao" class="form-control" name="posicao" 
                       value="{{$dados->Posicao}}">
            </div>
            <div class="form-group">
                <label for="numero">Número:</label>
                <input type="numero" class="form-control" name="numero" 
                       value="{{$dados->Numero}}">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='/jogador';" type="button" 
                    class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection