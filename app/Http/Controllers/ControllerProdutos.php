<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;



class ControllerProdutos extends Controller
{

function formProduto(Request $request){
    return view('produtos.add');
}

function lista(Request $request){
    //buscando categorias para exibir na busca
    $categorias= Categoria::get();

    //requests 
    $nome=$request->input('nome');
    $categoria_id=$request->input('categoria_id');
    $usado=$request->input('usado');
    $preco=$request->input('preco');

    $query = Produto::query();//criando uma query ex: Select * from tablexample

    if(!empty($categoria_id)){ //se nao está empty
        $query->where('categoria_id',$categoria_id);
    }                 //categoria_id do banco

    if( !empty($nome) ){  
        $query->where('nome', 'LIKE', '%'.$nome.'%');//verificando se nome não esta vazio e fazendo where
    }
    if(!empty($usado) ){  
        $query->where('usado',$usado);
    }
    if(!empty($preco) ){  
        $query->where('preco',"<",$preco);
    }


    
    $lista= $query->paginate(5);
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
