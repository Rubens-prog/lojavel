@extends('template')

@section('main')

<h1>Categorias</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<a href="/categorias/novo/" class="btn btn-primary">Cadastrar novo</a>


<table class="table mt-5">
    <thead class="thead-dark">
        <tr>
            <th class="text-center">id</th>
            <th class="text-center">nome</th>  
            <th class="text-center">ações</th>             
        </tr>
    </thead>
    <tbody>
   
   @foreach($categorias as $categoria)
          <tr>    
            <td class="text-center">{{$categoria->id}}</td>
            <td class="text-center">{{$categoria->nome}}</td>
            <td class="text-center">
            <a href="/categorias/edit/{{$categoria->id}}" class="btn btn-secondary">edit</a>
            <a href="/categorias/delete?id={{$categoria->id}}" onclick="return confirm('Você tem certeza?')" class="btn btn-danger">delete</a>
            </td>       
          </tr>
@endforeach
    </tbody>
</table>
@stop