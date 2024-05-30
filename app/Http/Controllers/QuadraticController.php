<?php

namespace App\Http\Controllers;

use App\Models\Quadratic;
use Illuminate\Http\Request;

class QuadraticController extends Controller
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
        return view('formulario_quadratic');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cuadratica = new Quadratic;
        $a=$request->input('a');
        $b=$request->input('b');
        $c=$request->input('c');

        $p1=($b*$b)-(4*$a*$c);

        if($a!=0 && $p1>=0){
            $p2=sqrt($p1);
            $x1=(-$b+$p2)/2*$a;
            $x2=(-$b-$p2)/2*$a;

            Quadratic::create([
                 
                'a' => $a,
                'b' => $b,
                'c' => $c,
                'x1' => $x1,
                'x2' => $x2,
            ]);

            return view('resultados_cuadratica')->with(compact('x1','x2'));

            }

        else{

            Quadratic::create([
                'a' => $a,
                'b' => $b,
                'c' => $c,
                'x1' => 0,
                'x2' => 0,
            ]);

            echo('No hay un resultado para los valores ingresados.');
        }

      

        

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Quadratic $quadratic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quadratic $quadratic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quadratic $quadratic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quadratic $quadratic)
    {
        //
    }
}
