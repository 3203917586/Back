<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function read(Request $request){
        $era = new Contacto();
        
        if($request->query("id")){
            $erac = $era->find($request->query("id"));
        }else{
            $erac = $era->all();
        }

        return response()->json($erac);
        
        // $data = $user->all();
        // return $data;    
    }

    public function create(Request $request){

        $contacto = new Contacto();

        $contacto->name = $request->input("name");
        $contacto->Mail = $request->input("Mail");
        $contacto->tel = $request->input("tel");
        $contacto->edition = $request->input("edition");

        $contacto->save();

        $message=["message" => "Resgistro Exitoso!!"];

        return response()->json($message,Response::HTTP_CREATED);
        
        // return response()->json($message,Response::201);
    }

}
