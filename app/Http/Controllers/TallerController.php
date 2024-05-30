<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TallerController extends Controller
{
    
    public function primos($numero)
    {
        $cont=0;
        for($k=1;$k<=$numero;$k++){
      if($numero%$k==0){
          $cont++;
      }
      }
      if($cont==2){
          return 'el numero es primo';
      }
      else
      {
          return 'el numero no es primo';
      }
   }
   
    
    public function amigos($numero1,$numero2)
    {

        $divisores1=array();
        $divisores2=array();

        for($k=1;$k<$numero1;$k++){

            if($numero1%$k==0){
                $divisores1[] = $k;
                
            }
        }
       
        $acu1=0;
        foreach ($divisores1 as $divisor1) {
            $acu1+=$divisor1;
        }
        echo "Suma de divisores del numero uno: $acu1 ";

        for($k=1;$k<$numero2;$k++){

            if($numero2%$k==0){
                $divisores2[] = $k;
                
            }
        }

        $acu2=0;

        foreach ($divisores2 as $divisor2) {
            $acu2+=$divisor2;
        }

        echo "<br/>";
        echo "Suma de divisores del numero dos: $acu2 ";
        
        if($acu1==$numero2 && $acu2==$numero1){
           echo "<br/>";
            return 'Los numeros son amigos';
        }

        else{ 
            echo "<br/>";
            return 'Los numeros no son amigos';
        }

    }

}