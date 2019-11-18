<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\socks;
use App\users;
use App\sweaters;

class tiendaController extends Controller
{
    public function indexSweaters()
    {
        $sweaters= sweaters::all();
        return view("sweatersView",["sweaters"=>$sweaters]);
    }
}
