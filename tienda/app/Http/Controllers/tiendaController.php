<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth;
use App\socks;
use App\users;
use App\sweaters;


class tiendaController extends Controller
{
  public function registrarUsuario(){
      $data = request()->all();
      $user= new users;
      $user->username=$data["username"];
      $user->password=$data["password"];
      $user->save();
    return redirect('/login');
  }

  public function viewCalcetin($id){
    $Calcetin = socks::find($id);
    if($Calcetin)
    {
      return view("Calcetin",["Calcetin"=>$Calcetin]);
    }else {
      return "No se encontro el dato que buscas<br><br><a href='/Calcetines'><button>Volver a calcetines</button></a>";
    }
  }
  public function indexSweaters()
    {
        $sweaters= sweaters::all();
        return view("sweatersView",["sweaters"=>$sweaters]);
    }

}
