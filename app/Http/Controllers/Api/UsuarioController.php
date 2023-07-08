<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function read(Request $request){
        $usua = new Usuario();
        
        if($request->query("id")){
            $usuar = $usua->find($request->query("id"));
        }else{
            $usuar = $usua->all();
        }

        return response()->json($usuar);
        
        // $data = $user->all();
        // return $data;    
    }

    public function create(Request $request){

        $usuario = new Contacto();

        $usuario->name = $request->input("name");
        $usuario->Mail = $request->input("Mail");
        $usuario->tel = $request->input("tel");
        $usuario->edition = $request->input("edition");

        $contacto->save();

        $message=["message" => "Resgistro Exitoso!!"];

        return response()->json($message,Response::HTTP_CREATED);
        
        // return response()->json($message,Response::201);
    }

    public function update(Request $request){

        $ide = $request->query("id");

        $Usuar1 = new Usuario();

        $usuario1 = $Usuar1->find($ide);
       
        $usuario1->name = $request->input("name");
        $usuario1->Mail = $request->input("Mail");
        $usuario1->tel = $request->input("tel");
        $usuario1->edition = $request->input("edition");

        $usuario1->save();

        $message=[
            "message" => "Actualización Exitosa!!",
            "ide" => $request->query("id"),
            "name" => $usuario1->name
        ];

        return $message;
    }

        

    public function delete(Request $request){

        $ide = $request->query("id");

        $dele = new Usuario();

        $eliminar = $dele->find($ide);

        $eliminar->delete();

        $message=[
            "message" => "Eliminación Exitosa!!",
            "ide" => $request->query("id"),
        ];

        return $message;
    }

}
