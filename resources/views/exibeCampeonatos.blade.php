@extends('layout')
@section('content')
    <div class="position-relative p-3 p-md-5 m-md-3 text-center"style="background-color: black;">
      <div class="col-md-5 p-lg-5 mx-auto my-5" >
        <h1 class="display-4 font-weight-normal text-white">COMPETIÇÃO</h1>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white" style="background-color: #003e80;">
      <table class="table table-ordered table-hover table-primary">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nome</th>
                        <th>Tipo</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dados as $item => $i)
                    <tr>
                        <td>{{ $i['id'] }}</td>
                        <td>{{ $i['Nome'] }}</td>
                        <td>{{ $i['Tipo'] }}</td>
                        <td style="text-align:center;">
                            <a href="/timescampeonato/detalhes/{{$i['id']}}" class="btn btn-success">Detalhes</a>
                            <a href="/campeonato/edit/{{$i['id']}}" class="btn btn-primary">Editar</a>
                            <a href="/campeonato/apagar/{{$i['id']}}" class="btn btn-danger" 
                            onclick="return confirm('Tem certeza de que deseja remover?');">Deletar</a>
                        </td>
                    </tr>  
                    @endforeach
                </tbody>
            </table>
      </div>
  </div>
  @endsection