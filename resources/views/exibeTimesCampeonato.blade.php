@extends('layout')
@section('content')


    <div class="position-relative p-3 p-md-5 m-md-3 text-center"style="background-color: black;">
      <div class="col-md-5 p-lg-5 mx-auto my-5" >
        <h1 class="display-4 font-weight-normal text-white">TIMES DO CAMPEONATO</h1>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
    </div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white" style="background-color: green;">
      <h3 class="display-7 font-weight-small text-white">Adicionar time</h3>
        <a class="btn btn-light" style="color: black; border-width: 2px; border-color: black;">+</a>

      <table class="table table-ordered table-hover table-success" style="margin-top: 20px;">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nome do Time</th>
                        <th>País do Time</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($dados as $item => $i)
                    <tr>
                        <td>{{ $i['id'] }}</td>
                        <td>{{ $i['Nome'] }}</td>
                        <td>{{ $i['Pais'] }}</td>
                        <td style="text-align:center">
                            <a href="/campeonato/apagar/{{$i['id']}}" class="btn btn-outline-danger" 
                            onclick="return confirm('Tem certeza de que deseja remover?');">Deletar</a>
                        </td>
                    </tr>  
                    @endforeach
                </tbody>
            </table>
      </div>
  </div>
  @endsection