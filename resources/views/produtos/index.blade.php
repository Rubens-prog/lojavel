@extends('template')

@section('main')
<h1>Lista Produtos</h1>



@if(session('Done'))
    <div class="alert alert-success">
        {{ session('Done') }}
    </div>
@endif

<a href="/produtos/adicionar" class="btn btn-primary">Novo produto</a>

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

@stop