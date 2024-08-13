@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">CADASTRE UM NOVO TIME</h1>
            </div>
        </div>
        <form action="{{route('gravaNovoTime')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" 
                       placeholder="Informe o nome do time">
            </div>
            <hr>
            <div class="form-group">
                <label for="tipo">País:</label>
                <input type="tipo" class="form-control" name="tipo" 
                       placeholder="Informe o país do time">
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