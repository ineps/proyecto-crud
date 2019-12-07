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

    public function eliminar(Request $request){

        try{

            if($request->isMethod('post')){
                $flight = Empleados::find($request->id);
                $data->delete();

                return response()->json([
                    'type' => 'success',
                    'msg' => 'Eliminación exitosa.'
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

    public function listar(){

        try{

            return response()->json([
                'type' => 'success',
                'msg' => 'Listado exitosa.',
                'data' => Empleados::all()
            ], 200);
            
        } catch(\Exception $e){
            return response()->json([
                'response' => 'error',
                'error' => $e->getMessage() . ' Archivo: ' . $e->getFile() . ' Codigo '. $e->getCode() . ' Linea: ' . $e->getLine(),
                'msg' => 'Error al guardar el usuario',
                'code' => 400
              ]);
        }
    }

    public function empleado(Request $request){

        try{

            return response()->json([
                'type' => 'success',
                'msg' => 'Listado exitosa.',
                'data' => Empleados::where('id', $request->id)->get();
            ], 200);
            
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
