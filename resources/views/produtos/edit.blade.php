@extends('template')

@section('main')

<h1>Altera Produto</h1>

<?php

$categorias=\App\Models\Categoria::get();
?>



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
    <label class="mt-4">Categorias:</label>
       <select name="categoria_id" class="form-control">
              @foreach($categorias as $categoria)
              <option value="{{$categoria->id}}" @if($produto->categoria_id==$categoria->id)selected="selected" @endif >{{$categoria->nome}}</option>
              @endforeach
       </select>
    </div>

   
    <div class="mt-4 mb-4">
    <label for="">Usado</label>
       <select class="form-control col-2" name="usado">
       <option @if($produto->usado == 1) selected="selected" @endif value="1">SIM</option>
       <option @if($produto->usado == 0) selected="selected" @endif value="0">NÃO</option>
       </select>        
    </div>

    <div class="mb-5"> 
        
           <button type="submit" class="btn btn-primary">editar</button>
    </div>


</form>


@stop


