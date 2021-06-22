@extends('template')

@section('main')

<h1>Editar Categoria</h1>



<form action="/categorias/update/{{$categoria->id}}" class="ls-form" method="post" >
    @csrf
    
    <div class="col-md-6">
        <div class="form-group">
            <label class="ls-label">
            <span class="ls-label-text">Nome</span>
                <input class="form-control" autocomplete="off" type="text" name="nome" required value="{{$categoria->nome}}">  
            </label>
        </div>
        <div class="form-group">
            <label class="ls-label">
            <span class="ls-label-text">Imagem</span>
                <input class="form-control" autocomplete="off" type="text" name="img" required value="{{$categoria->img}}">  
            </label>
        </div>
         <button type="submit" class="btn btn-danger"> Editar</button>
    </div>

    
</form>



@stop