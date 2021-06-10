<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;



class ControllerProdutos extends Controller
{

function adicionaProduto(Request $request){
    return view('produtos.add');
}

function salvaProduto(Request $request){
    $nome=$request->input("nome");
    $preco=$request->input("preco");
    $descricao=$request->input("descricao");
    $usado=$request->input("usado");

    $produto= new Produto;
    $produto->nome= $nome;
    $produto->preco= $preco;
    $produto->descricao= $descricao;
    
    if( !empty($usado) ){
        $produto->usado= $usado;
    }

    $produto->save();
    return redirect("/lista")->with("Done","Produto " . $nome .", ".  $preco . " adicionado com sucesso!");
    
}

function editaProduto(Request $request){
    return view('produtos.edit');
}

function lista(){
    $lista= Produto::get();
    return view('produtos.index')->with("produtos", $lista);
}
function deleteProduto(Request $request){
    $id=$request->input("id");
    $produto=Produto::find($id);

    $produto->delete();
    return redirect("/produtos")->with("Done", "Produto removido");

}
    
}
