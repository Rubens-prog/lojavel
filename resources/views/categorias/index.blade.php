@extends('template')

@section('main')

<h1>Categorias</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<a href="/categorias/novo/" class="btn btn-primary"><i class="fas fa-plus mr-1"></i>Cadastrar novo</a>

<div class="row">
@foreach($categorias as $categoria)
  <div class="col-md-4">
    <div style="width:80%;">
        <div class="card mt-5 mb-5" >
        <img  src="{{$categoria->img}}" class="card-img-top" >
        <div class="card-body" >
            <h5 class="card-title">{{$categoria->nome}}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="/produtos?categoria_id={{$categoria->id}}" class="btn btn-primary">Visualizar</a>
            <a href="/categorias/edit/{{$categoria->id}}" class="btn btn-secondary"><i class="fas fa-pen ml-2 mr-2"></i></a>
            <a href="/categorias/delete?id={{$categoria->id}}" onclick="return confirm('Você tem certeza?')" class="btn btn-danger"><i class="far fa-trash-alt ml-2 mr-2"></i></a>
        </div>
        </div>
    </div>
    </div>
@endforeach
</div>

<div class="mt-4 d-flex justify-content-center">
 {{$categorias->links()}}
</div> 

@stop