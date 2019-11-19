<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\socks;
use App\users;
use App\sweaters;
<<<<<<< HEAD
=======

>>>>>>> 6b9fbfaed0c0458495e32cf739da904373f6ac86

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
<<<<<<< HEAD
  public function viewCalcetines(){
    $Calcetines = socks::all();
    return view("Calcetines",["Calcetines"=>$Calcetines]);
  }
=======
>>>>>>> 6b9fbfaed0c0458495e32cf739da904373f6ac86
  public function indexSweaters()
    {
        $sweaters= sweaters::all();
        return view("sweatersView",["sweaters"=>$sweaters]);
    }
<<<<<<< HEAD
}
=======

>>>>>>> 6b9fbfaed0c0458495e32cf739da904373f6ac86
