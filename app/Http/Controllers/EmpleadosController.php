<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleados;

class EmpleadosController extends Controller
{
    //
    public function crear(Request $request){

        try{

            if($request->isMethod('post')){
                $data = new Empleados;

                $data->nombre = $request->nombre;
                $data->a_paterno = $request->a_paterno;
                $data->a_materno = $request->a_materno;
                $data->fecha_nac = $request->fecha_nac;

                $data->save();
                return response()->json([
                    'type' => 'success',
                    'msg' => 'Creación exitosa.'
                ], 200);
            }
        } catch(\Exception $e){
            return response()->json([
                'response' => 'error',
                'error' => $e->getMessage() . ' Archivo: ' . $e->getFile() . ' Codigo '. $e->getCode() . ' Linea: ' . $e->getLine(),
                'msg' => 'Error al guardar el usuario',
                'code' => 400
              ]);
        }
    }
}
