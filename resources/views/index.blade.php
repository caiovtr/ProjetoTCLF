@extends('layout')
@section('content')
    <div class="position-relative p-3 p-md-5 m-md-3 text-center"style="background-color: black;">
      <div class="col-md-5 p-lg-5 mx-auto my-5" >
        <h1 class="display-4 font-weight-normal text-white">FUTEBOL</h1>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white" style="background-color: #003e80;">
        <div class="my-3 py-3">
          <h2 class="display-5 font-weight-normal">CAMPEONATOS</h2>
        </div>
        <button type="button" class="btn btn-primary"  >
        <a href="{{route('novoCampeonato')}}">Cadastrar</a>
        </button>
        <button type="button" class="btn btn-primary" >
        <a href="{{route('exibeCampeonatos')}}">Exibir</a>
        </button>
      </div>
      <div class=" mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white"style="background-color: green;">
        <div class="my-3 p-3">
          <h2 class="display-5 font-weight-normal">TIMES</h2>
        </div>
        <button type="button" class="btn btn-success">
        <a href="{{route('novoTime')}}">Cadastrar</a>
        </button>
        <button type="button" class="btn btn-success">
        <a href="{{route('exibeTimes')}}">Exibir</a>
        </button>
      </div>
      <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white" style="background-color: #d8a200;">
        <div class="my-3 py-3">
          <h2 class="display-5 font-weight-normal">JOGADORES</h2>
        </div>
        <button type="button" class="btn btn-warning text-white">
        <a href="{{route('novoJogador')}}">Cadastrar</a>
        </button>
        <button type="button" class="btn btn-warning text-white">
        <a href="{{route('exibeJogadores')}}">Exibir</a>
        </button>
      </div>
  </div>
  @endsection