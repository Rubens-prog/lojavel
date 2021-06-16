@extends('template')

@section('main')

<?php
$categorias=\App\Models\Categoria::get();
?>


<h1>Lista Produtos</h1>



@if(session('Done'))
    <div class="alert alert-success"> 
        {{ session('Done') }}
    </div>
@endif

<a href="/produtos/adicionar" class="btn btn-primary">Novo produto</a>

<div>
    <label for="">Filtro:</label>
    <form action="/produtos" class="form-inline">   
        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Nome" name="nome">
        <input type="number" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Preço até..." name="preco">

        <select class="form-control mb-2 mr-sm-2" name="usado" id=""> 
            <option  value="">usado</option>
            <option  value="1">Sim</option>
            <option  value="false">Não</option>        
        </select>

        <div class="input-group mb-2 mr-sm-2">
            <select name="categoria_id" class="form-control">
                    <option value="">Seleciona a categoria</option>
                    @foreach($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                    @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-info mb-2">Filtrar</button>
    </form>
</div>


<table class="table mt-5">
    <thead class="thead-dark">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>    
            <th>Categoria</th>    
            <th>Usado</th>    
            <th>Ações</th>    
        </tr>
    </thead>
    <tbody>
    @foreach($produtos as $produto)
          <tr>    
            <td>{{$produto->nome}}</td>
            <td>{{$produto->preco}}</td>
            <td>{{$produto->descricao}}</td>
            <td>{{$produto->categoria->nome}}</td>
            <td>
                @if($produto->usado == 1)
                   SIM
                @else
                    NÂO
                @endif 
            </td> 
            <td>
            <a href="/produtos/edita?id={{$produto->id}}" class="btn btn-secondary">edit</a>
            <a href="/produtos/delete?id={{$produto->id}}" onclick="return confirm('Você tem certeza?')" class="btn btn-danger">delete</a>
            </td>
          </tr>

    @endforeach
    </tbody>
</table>
<hr>
<div class="mt-4 d-flex justify-content-center">
 {{$produtos->links()}}
</div>

@stop