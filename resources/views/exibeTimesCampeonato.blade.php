@extends('layout')
@section('content')
    <div class="position-relative p-3 p-md-5 m-md-3 text-center"style="background-color: black;">
      <div class="col-md-5 p-lg-5 mx-auto my-5" >
        <h6 class="display-3 font-weight-bold text-white" style="text-transform: capitalize" >{{$dados->Nome}}</h6>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
    </div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white" style="background-color: green;">
      <h3 class="display-7 font-weight-small text-white">Adicionar time</h3> <a href="/timescampeonato/{{$dados->id}}')" class="btn btn-light" style="color: black; border-width: 2px; border-color: black;">+</a>
      <table class="table table-ordered table-hover table-success" style="margin-top: 20px;">
                <thead>
                @forelse ($timesCampeonato as $item)
                    <tr>
                        <td>{{ $item->idTime }}</td>
                        <td>{{ $item->nomeTime }}</td>
                        <td style="text-align:center">
                            <a href="/timescampeonato/apagar/{{$dados->id}}/{{$item->idTime}}" class="btn btn-danger" >Deletar</a>
                        </td>
                    </tr>  
                    @empty 
                        <tr>
                            <td style="text-align:center; font-size:large;" colspan="4">Não há times cadastrados neste campeonato</td>                            
                        </tr>
                    @endforelse
                </tbody>
            </table>
      </div>
  </div>
  @endsection