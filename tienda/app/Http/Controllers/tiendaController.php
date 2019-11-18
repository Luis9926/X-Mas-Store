<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\socks;

class tiendaController extends Controller
{
    public function viewCalcetin($id){
      $Calcetin = socks::find($id);
      return view("Calcetin",["Calcetin"=>$Calcetin]);
    }
}
