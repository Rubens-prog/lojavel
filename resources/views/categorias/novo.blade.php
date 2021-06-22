@extends('template')

@section('main')

<h1>Nova Categoria</h1>



<form action="/categorias/salvar" class="ls-form" method="post" >
    @csrf
    
    <div class="col-md-6">
        
        <div class="form-group">
            <label class="ls-label">
            <span class="ls-label-text">Nome</span>
                <input class="form-control" autocomplete="off" type="text" name="nome" required>  
            </label>
        </div>
        <div class="form-group">
            <label class="ls-label">
            <span class="ls-label-text">Imagem</span>
                <input placeholder="link imagem" class="form-control" autocomplete="off" type="text" name="img" required>  
            </label>
        </div>
         <button type="submit" class="btn btn-danger"> Cadastrar</button>
    </div>

    
</form>



@stop