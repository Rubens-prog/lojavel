@extends('template')
@section('main')

<h1>Editar Usuário</h1>



<form action="/usuarios/update?id={{$user->id}}" method="post">
    @csrf
    <div>
        
        <label>Nome:</label>
        <input required class="form-control" type="text" name="name" value="{{$user->name}}">
        
    </div>
    <div>
    
        <label class="mt-4">Email:</label>
        <input required class="form-control" type="email" name="email" value="{{$user->email}}">

    </div>
    <div>
    
        <label class="mt-4">Telefone:</label>
        <input class="form-control" type="text" name="phone" value="{{$user->phone}}" id="phone">

    </div>
    <div>
    
        <label class="mt-4">Cpf:</label>
        <input required class="form-control" type="text" name="cpf" id="cpf" value="{{$user->cpf}}">
    </div>

    <div class="mb-4">
        
           <label class="mt-4">Password:</label>
            <input class="form-control" type="password" name="password" >        
    </div>

    <div class="mb-5"> 
        
        <button type="submit" class="btn btn-primary">Editar</button>
        <a href="/usuarios" class="btn btn-secondary">Voltar</a>

    </div>

    <script>
       $("#phone").mask("(99)99999-9999");
       $("#cpf").mask("999.999.999-99");
   </script> 
@stop