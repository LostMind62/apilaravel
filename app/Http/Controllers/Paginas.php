<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class Paginas extends Controller
{
	public function opera(Request $request){  
        
        $op=$request->operacion;
        

        if(preg_match('/[A-Za-z]+/', $op) or $op=="") {

        return back()->with('mensaje', 'Ingreso letras o Cadena vacia');
    }

    else {
        $value=eval("return ($op);");
        // reguesa vista en html 
        if ($request->salida=='html') {
            echo "request"."<br>";
            echo $request->fullUrl()."<br>";
            echo "Respuesta del servidor<br> ";
            print_r($request->all());


           return view('welcome2',['op'=>strval($op),'value'=>$value]);
        }
        
        // enviar solo el json
        elseif ($request->salida=='json') {
            return collect(['operacion'=>$op,'resultado'=>$value])->tojson(JSON_PRETTY_PRINT);
        }
      
}
	}

    public function mostrar($op){
    	$value=eval("return ($op);");
    	echo $value;
    	

    	return response()->json([
    		'Operacion' => $op,
    		'resultado' => $value,
			]);
    }
}
