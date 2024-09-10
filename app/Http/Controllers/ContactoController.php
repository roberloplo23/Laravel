<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactoController extends Controller
{ 
    public function listado(){
    $mensajes = ContactoController::all();

        return view('listado-contactos', compact('mensajes'));
    }

    public function formularioContacto(){
        return view('contacto');
    }
    //
}

$request->validate([
    'nombre'=>'required',
    'correo'=>'required|email',
    'mensaje'
])