@extends('layout')
@section('content')
<div class="container py-4">
    <div class="position-relative p-3 p-md-5 m-md-3 text-center"style="background-color: #003e80;">
      <div class="col-md-5 p-lg-5 mx-auto my-5" >
        <h1 class="display-4 font-weight-normal text-white">CADASTRAR CAMPEONATO</h1>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
        <form action="{{route('gravaNovoCampeonato')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" 
                       placeholder="Informe o nome do campeonato">
            </div>
            <hr>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="tipo" class="form-control" name="tipo" 
                       placeholder="Informe o tipo do campeonato">
            </div>
            <hr>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="button" class="btn btn-danger btn-sm">
                <a href="/">Cancelar</a>
            </button>
        </form>
</div>
</div>
</div>
@endsection