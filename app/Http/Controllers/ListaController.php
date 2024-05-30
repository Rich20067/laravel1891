<?php

namespace App\Http\Controllers;
use App\Models\Lista;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    //
    public function create(){

        return view('lista');

    }

    public function store(Request $request){

        $lista=new Lista();
        $lista->name=$request->name;
        $lista->price=$request->price;
        $lista->descripcion=$request->descripcion;
        $lista->quantity=$request->quantity;
        $lista->date_exp=$request->date_exp;
        $lista->save();
        return $request;

    }
}
