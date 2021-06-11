@extends('template')

@section('main')

<h1>Altera Produto</h1>

@if(session('Done'))
    <div class="alert alert-success">
        {{ session('Done') }}
    </div>
@endif

<form action="/produtos-edita?id={{$produto->id}}" method="post">
    @csrf
    <div>
        
           <label>Nome:</label>
           <input required class="form-control" type="text" name="nome" value="{{$produto->nome}}">
        
    </div>
    <div>
        
           <label class="mt-4">Preço:</label>
           <input required class="form-control" type="number" name="preco" value="{{$produto->preco}}">

    </div>
    <div>
        
           <label class="mt-4">Descrição:</label>
           <textarea  required class="form-control" name="descricao">{{$produto->descricao}}</textarea>
        
    </div>
   
    <div>
        
            
            <input class="mt-4 mb-4" type="checkbox" name="usado" checked="@if($produto->usado= 'true')'{{'checked'}}@else{{'false'}}  @endif">Usado
        
    </div>
    <div> 
        
           <button type="submit" class="btn btn-primary">editar</button>
    </div>


</form>


@stop


