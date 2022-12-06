<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Hash;
use Session;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }
    public function registro()
    {
        return view("auth.registro");
    }
    public function registroUsuario(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'correo'=>'required|email|unique:usuarios',
            'contrasena'=>'required|min:4|max:12'
        ]);
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        $usuario->contrasena = Hash::make($request->contrasena);
        $query = $usuario->save();
        if($query){
            return back()->with('success','Te registraste correctamente'); 
        }else{
            return back()->with('fail','Ocurrio un error');
        }
    }
    public function loginUsuario(Request $request)
    {
        $request->validate([
            'correo'=>'required|email',
            'contrasena'=>'required|min:4|max:12'
        ]);
        $usuario = Usuario::where('correo','=',$request->correo)->first();
        if($usuario){
            if(Hash::check($request->contrasena, $usuario->contrasena)){
                $request->session()->put('loginId', $usuario->id);
                return redirect(('starter'));
            }else{
                return back()->with('fail','La contrasena no es la misma');
            }
        }else{
            return back()->with('fail','Este correo no esta registrado');
        }
    }
    public function starter(){
        $data = array();
        if(Session::has('loginId')){
            $data = Usuario::where('id', '=', Session::get('loginId'))->first();
        }
        return view('starter', compact('data'));
    }
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('starter');
        }
    }
}

