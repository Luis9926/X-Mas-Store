<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\socks;
use App\users;

class tiendaController extends Controller
{
  public function registrarUsuario(){
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
}
