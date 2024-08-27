@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">CADASTRE UM NOVO TIME PARA ESTE CAMPEONATO</h1>
                <h6 class="text-center">{{$dados->Nome}}</h6>
            </div>
        </div>
        <form action="{{route('gravaNovoTimeCampeonato')}}" method="POST">
            @csrf
            <input type="hidden" id="campeonato_id" name="campeonato_id" value="{{$dados->id}}">
            <div class="form-group">
                <label for="time">Times</label><br />
                <select name="time">
                        @foreach ($times as $item)
                            <option value="{{$item->id}}">{{$item->Nome}}</option>
                        @endforeach
                </select>
             </div>
            <hr>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='/campeonato';" type="button" 
                    class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection