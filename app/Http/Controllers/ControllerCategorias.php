<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;


class ControllerCategorias extends Controller
{
function index(){
    $categorias=Categoria::simplePaginate(5);
    return view('categorias.index')->with('categorias', $categorias);
    
}


public function salvar(Request $request){
    $data=$request->except(["_token"]);
    $categoria = Categoria::create($data);
    
    
    return redirect('/categorias')->with("success","Categoria adicionada!");
}

public function delete(Request $request){
    $id=$request->input('id');
    $categoria=Categoria::findOrFail($id);

    $categoria->delete();
    return redirect('/categorias')->with("success", "Categoria removida");
}
public function edit($id){
    $categoria=Categoria::find($id);

    return view('categorias.edit')->with("categoria", $categoria);
}
public function update(Request $request, $id){
    $data=$request->except(["_token"]);
    $categoria=Categoria::where("id",$id)->update($data);

    return redirect('/categorias')->with("success","Categoria editada com sucesso");

}
    
}
