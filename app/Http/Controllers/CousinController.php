<?php

namespace App\Http\Controllers;

use App\Models\Cousin;
use Illuminate\Http\Request;

class CousinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario_cousin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
     {

        $primo = new Cousin();
        $numero=$request->input('numero');
  
        $cont=0;
            for($k=1;$k<=$numero;$k++){
          if($numero%$k==0){
              $cont++;
          }
          }
          if($cont==2){
            Cousin::create([

                'numero'=>$numero,
                'primo'=>'El numero es primo'
            ]);
            echo 'El numero es primo';
          }
          else
          {
            Cousin::create([

                'numero'=>$numero,
                'primo'=>'El numero no es primo'
            ]);
            echo 'El numero no es primo';
          }
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Cousin $cousin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cousin $cousin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cousin $cousin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cousin $cousin)
    {
        //
    }
}
