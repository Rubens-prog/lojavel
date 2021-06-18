@extends('template')
@section('main')




<h1>Usuários</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<a href="/usuarios/form" class="btn btn-primary">Novo usuário</a>


<table class="table mt-5">
    <thead class="thead-dark">
        <tr>
            <th>Nome</th>
            <th>email</th> 
            <th>telefone</th> 
            <th>cpf</th> 
            <th>ações</th>
            <th></th> 
        </tr>
    </thead>

    <tbody>
        @foreach($users as $user)
            <tr>    
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->cpf}}</td>
                <td>
                <a href="/usuarios/edit?id={{$user->id}}" class="btn btn-secondary">edit</a>
                <a href="/usuarios/delete?id={{$user->id}}" onclick="return confirm('Você tem certeza?')" class="btn btn-danger">delete</a>
                </td>
            </tr>
        @endforeach   
   </tbody>
</table>

<hr>
<div class="mt-4 d-flex justify-content-center">
{{$users->links()}}
</div>

@stop

