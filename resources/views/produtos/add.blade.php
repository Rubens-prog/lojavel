@extends('template')

@section('main')

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
       <select name="categoria" class="form-control">
              <option>esporte</option>             
              <option>musica</option>             
              <option>mobilidade</option>             
              <option>moda</option>             
       </select>
    </div>

    <div>
        
            
            <input class="mt-4 mb-4" type="checkbox" name="usado" value="1">Usado
        
    </div>
    <div> 
        
           <button type="submit" class="btn btn-primary">Cadastrar</button>
        
    </div>
    

</form>
@stop
