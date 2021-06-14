<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;



class ControllerProdutos extends Controller
{

function formProduto(Request $request){
    return view('produtos.add');
}

function lista(){
    $lista= Produto::get();
    return view('produtos.index')->with("produtos", $lista);//transforma variável $lista em $produtos 
}

function salvaProduto(Request $request){
    $data=$request->except(["_token"]);
    $produto=Produto::create($data);

    return redirect("/produtos")->with("Done","Produto " . $produto->nome .", ".  $produto->preco . " adicionado com sucesso!");
    
}

function editaProduto(Request $request){
   $id=$request->input('id');
   $produtos= Produto::find($id);
   

    return view('produtos.edit')->with("produto",$produtos);
}


function deleteProduto(Request $request){
    $id=$request->input("id");
    $produto=Produto::find($id);

    $produto->delete();
    return redirect("/produtos")->with("Done", "Produto removido");

}
function updateProduto(Request $request){
    $data=$request->except(["_token"]);
    $id=$request->input('id');

    $produto=Produto::where("id", $id)->update($data);

    return redirect("/produtos")->with("Done","Produto editado!");
   
}
    
}
