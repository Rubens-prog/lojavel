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
    return redirect("/produtos")->with("Done","Produto " . $nome .", ".  $preco . " adicionado com sucesso!");
    
}

function editaProduto(Request $request){
   $id=$request->input('id');
   $produtos= Produto::find($id);
   

    return view('produtos.edit')->with("produto",$produtos);
}

function lista(){
    $lista= Produto::get();
    return view('produtos.index')->with("produtos", $lista);//transforma variável $lista em $produtos 
}
function deleteProduto(Request $request){
    $id=$request->input("id");
    $produto=Produto::find($id);

    $produto->delete();
    return redirect("/produtos")->with("Done", "Produto removido");

}
function updateProduto(Request $request){
    $id=$request->input('id');
    $produto=Produto::find($id);

    $nome= $request->input("nome");
    $preco=$request->input("preco");
    $descricao=$request->input("descricao");
    
 

    //$produto->nome($nome); NAO FAZ SENTIDO!
    //$produto->preco($preco);
    //$produto->descricao($descricao);
    //$produto->usado($usado);

    $produto->nome= $nome;
    $produto->preco= $preco;
    $produto->descricao= $descricao;
    
    
    

    $produto->save();
    return redirect("/produtos")->with("Done","Produto editado!");
   
}
    
}
