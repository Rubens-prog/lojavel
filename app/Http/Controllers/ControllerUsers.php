<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ControllerUsers extends Controller
{
    
public function users(Request $request){
    $users=User::paginate(5);

    //$nome=$request->input('name');
    //$email=$request->input('email');
    //$phone=$request->input('phone');
   

    return view('users.index')->with("users",$users);
}

public function formUser(Request $request){
   
    return view('users.add');
}

public function saveUser(Request $request){
    $data = $request->except(["_token"]);
    $data['password'] = Hash::make($data['password']);
    $users=User::create($data);

    return redirect('/usuarios')->with("success","Usuário adicionado com sucesso");
}
public function destroy(Request $request){
    $id=$request->input('id');
    $users=User::find($id);

    $users->delete();
    return redirect('/usuarios')->with("success", "Usuário removido");

}
public function edit(Request $request){
    $id=$request->input('id');
    $users= User::find($id);

   return view('users.edit')->with("user",$users);
}
function updateUsers(Request $request){
    $data=$request->except(["_token","password"]);

    if(!empty($request->input('password'))){
    $data['password'] = Hash::make($data['password']);
}
    $id=$request->input('id');

    $user=User::where("id", $id)->update($data);
    


    return redirect("/usuarios")->with("success","Usuário editado!");
}

}
