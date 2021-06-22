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

<a href="/produtos/adicionar" class="btn btn-primary"><i class="fas fa-plus mr-1"></i>Novo produto</a>

<button  type="button" class="btn btn-info form-control mt-4" data-toggle="collapse" data-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter">
  Filtro<i class="fas fa-angle-down" style="margin-left:1020px;"></i>
</button>

<!-- Collapse -->
    <div class="collapse" id="collapseFilter">
        <form class="mt-4" action="/produtos" class="form-inline">   
            <div class="row">
            <div class="col-md-4">
                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Nome" name="nome">
            </div>
            <div class="col-md-4">
                <input type="number" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Preço até..." name="preco">
            </div>
            <div class="col-md-4">
                <select class="form-control mb-2 mr-sm-2" name="usado" id=""> 
                    <option  value="">usado</option>
                    <option  value="1">Sim</option>
                    <option  value="false">Não</option>        
                </select>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-2 mr-sm-2">
                    <select name="categoria_id" class="form-control">
                            <option value="">Seleciona a categoria</option>
                            @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                            @endforeach
                    </select>
            </div>
                </div>
            </div>
             <button class="btn btn-dark" type="submit">Filtrar</button>
        </form>
    </div>
    
<table class="table mt-5 table-striped">
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
                    NÃO
                @endif 
            </td> 
            <td>
            <a href="/produtos/edita?id={{$produto->id}}" class="btn btn-secondary"><i class="fas fa-pen ml-2 mr-2"></i></a>
            <a href="/produtos/delete?id={{$produto->id}}" onclick="return confirm('Você tem certeza?')" class="btn btn-danger"><i class="far fa-trash-alt ml-2 mr-2"></i></a>
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