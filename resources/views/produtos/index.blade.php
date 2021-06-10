@extends('template')

@section('main')
<h1>Lista Produtos</h1>



@if(session('Done'))
    <div class="alert alert-success">
        {{ session('Done') }}
    </div>
@endif

<table class="table mt-5">
    <thead class="thead-dark">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>    
            <th></th>    
            <th></th>    
        </tr>
    </thead>
    <tbody>
    @foreach($produtos as $produto)
          <tr>    
            <td>{{$produto->nome}}</td>
            <td>{{$produto->preco}}</td>
            <td>{{$produto->descricao}}</td>
            <td><a href="/produtos/edita?id={{$produto->id}}" class="btn btn-secondary">edit</a></td> 
            <td><a onclick="return confirm('Você tem certeza?')" href="/produtos/delete?id={{$produto->id}}" class="btn btn-danger">delete</a></td>
          </tr>
    @endforeach
    </tbody>
</table>

@stop