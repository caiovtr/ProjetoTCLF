@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">CADASTRE UM NOVO JOGADOR</h1>
            </div>
        </div>
        <form action="{{route('gravaNovoJogador')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" 
                       placeholder="Informe o nome do jogador">
            </div>
            <hr>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="idade" class="form-control" name="idade" 
                       placeholder="Informe o idade do jogador">
            </div>
            <div class="form-group">
                <label for="posicao">Posição:</label>
                <input type="posicao" class="form-control" name="posicao" 
                       placeholder="Informe a posição do jogador">
            </div>
            <div class="form-group">
                <label for="numero">Número da camisa:</label>
                <input type="numero" class="form-control" name="numero" 
                       placeholder="Informe o número do jogador">
            </div>
            <hr>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button type="button" class="btn btn-outline-danger btn-sm">
                <a href="index" style="color: red;">Cancelar</a>
            </button>
        </form>
    </div> 
</div> 
</div>
@endsection