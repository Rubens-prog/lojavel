@extends('template')

@section('main')

<?php


$categorias=\App\Models\Categoria::get();
?>

<h1 class="">Adiciona Produto</h1>



<form action="/produtos/salva-produto" method="post">
    @csrf
    <div>
        
           <label>Nome:</label>
           <input required class="form-control" type="text" name="nome">
        
    </div>
    <div>
        
           <label class="mt-4">Preço:</label>
           <input required class="form-control" type="number" name="preco">

    </div>
    <div>
        
           <label class="mt-4">Descrição:</label>
           <textarea  required class="form-control" name="descricao"></textarea>
        
    </div>

    <div>
    <label class="mt-4">Categorias:</label>
       <select name="categoria_id" class="form-control">
              @foreach($categorias as $categoria)
              <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
              @endforeach
       </select>
    </div>

   
    <div class="mt-4 mb-4">
    <label for="">Usado</label>
       <select class="form-control col-2" name="usado">
       <option value="1">SIM</option>
       <option value="0">NÃO</option>
       </select>        
    </div>
       <hr>
    <div class="mb-5"> 
        
           <button type="submit" class="btn btn-primary">Cadastrar</button>
           <a href="/produtos" class="btn btn-secondary">Voltar</a>
        
    </div>
    

</form>
@stop
