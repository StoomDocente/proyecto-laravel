<?php

namespace App\Http\Controllers;

use App\models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function userform(){
        return view('users.userform');
    }
    //guardar usuarios
    public function save(Request $request){

        $validator = $this->validate($request,[
            'nombre'=> 'required|string|max:255',
            'email'=> 'required|string|max:255|email|unique:usuarios'
        ]);

        //$userdata = request()->all();
        $userdata = request()->except('_token');
        Usuario::insert($userdata);
        //return response()->json($userdata);
        //return 'Usuario guardado';
        return back()->with('usuarioGuardado',' Usuario guardado');
    }
    //istar elementos
    public function list(){
        $data['users'] = Usuario::paginate(10);
        return view('users.index', $data);
    }

    public function delete($id){
        Usuario::destroy($id);
        return back()->with('usuarioEliminado', 'El usuario ha sido eliminado');
    }
}
