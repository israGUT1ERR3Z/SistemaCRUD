<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CRUDController extends Controller
{
    public function index(){
        $datos=DB::select("SELECT * FROM users;");
        return view("index")->with("datos",$datos);
    }

    public function registro(){
        return view("registro");
    }

    public function modificar(){
        return view("modifica");
    }

    public function eliminar(){
        return view("elimina");
    }

    public function subirDatos(Request $request){
        $sql=DB::insert("INSERT INTO users(Nombres, Apellidos, Correo, Celular, Password) VALUES (?,?,?,?,SHA2(?,256))",[
            $request->nombres,$request->apellidos,$request->correo,$request->celular,$request->password
        ]);
        if($sql==true){
            $request->session()->flash('status', 'Datos subidos correctamente');
        }else{
            $request->session()->flash('status', 'Error al subir los datos');
        }
        $datos=DB::select("SELECT * FROM users;");
        return redirect()->route('crud.index')->with("datos",$datos);
        
    }

    public function actualizarDatos(Request $request){
        if(($request->combo)=="password"){
            $sql=DB::update("UPDATE users SET Password=SHA2(?,256) WHERE ID=?",[$request->nuevo, $request->ID]);
            if($sql==true){
                $request->session()->flash('status', 'Usuario actualizado correctamente');
            }else{
                $request->session()->flash('status', 'Error al actualizar dato');
            }
        }else{
            $sql=DB::update("UPDATE users SET ".$request->combo."=? WHERE ID=?",[$request->nuevo, $request->ID]);
            if($sql==true){
                $request->session()->flash('status', 'Usuario actualizado correctamente');
            }else{
                $request->session()->flash('status', 'Error al actualizar dato. Usuario no encontrado');
            }
        }

        $datos=DB::select("SELECT * FROM users;");
        return redirect()->route('crud.index')->with("datos",$datos);
        
    }

    public function eliminarDatos(Request $request){
        $sql=DB::delete("DELETE FROM users WHERE ID=?",[$request->ID]);
        if($sql==true){
            $request->session()->flash('status', 'Usuario eliminado correctamente');
        }else{
            $request->session()->flash('status', 'Error al eliminar el usuario. Usuario no encontrado');
        }
        $datos=DB::select("SELECT * FROM users;");
        return redirect()->route('crud.index')->with("datos",$datos);
        
    }
}
