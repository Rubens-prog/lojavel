@extends('template')
@section('main')

<h1>Sobre o Lojavel</h1>


<a class="ls-collapse-header">
        <h3 class="ls-collapse-title">Filtros</h3>
    </a>
    <div class="ls-collapse-body">
        <form action="/cursos" class="ls-form ">
            <fieldset>
                <div class="row">
                    <div class="col-md-4">
                        <label class="ls-label ">
                            <b class="ls-label-text">Nome do Curso</b>
                            <input type="text" name="nome" placeholder="Nome do Curso">
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label class="ls-label">
                            <b class="ls-label-text">Cursos</b>
                            <div class="ls-custom-select ls-field-sm">
                                <select name="ativo" class="ls-select">
                                    <option value=''>Todos</option>
                                    <option value='1'>Ativos</option>
                                    <option value='false'>Desativados</option>
                                </select>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label class="ls-label">
                            <b class="ls-label-text">Carga Horária</b>
                            <input type="number" name="horas" placeholder="Carga Horária">
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label class="ls-label">
                            <b class="ls-label-text">Categoria</b>
                            <div class="ls-custom-select">
                                <select name="categoria_id" class="ls-select">
                                    <option value="">(selecione)</option>
                                    
                                    <option value></option>
                                    
                                </select>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label class="ls-label">
                            <b class="ls-label-text">Tipo</b>
                            <div class="ls-custom-select">
                                <select name="tipo_id" class="ls-select">
                                    <option value="">(selecione)</option>
                                    <option value=""></option>
                                    
                                </select>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label class="ls-label">
                            <b class="ls-label-text">Faculdade</b>
                            <div class="ls-custom-select">
                                <select name="faculdade_id" class="ls-select">
                                    <option value="">djksanf</option>
                                    
                                    <option value=""></option>
                                   
                                </select>
                            </div>
                        </label>
                    </div>
                </div>
            </fieldset>
            <button class="ls-btn-primary ls-ico-search">Filtrar</button>
        </form>
    </div>
</div>
<div>
    <p>
    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Link with href
    </a>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Button with data-target
    </button>
    </p>
    <div class="collapse" id="collapseExample">
    <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
    </div>
    </div>
</div>	    

@stop