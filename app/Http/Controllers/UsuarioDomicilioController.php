<?php

namespace App\Http\Controllers;

use App\Models\UsuarioDomicilio;
use Illuminate\Http\Request;

class UsuarioDomicilioController extends Controller
{
    public function getUsuarioDomicilio(){
        $usuarios = UsuarioDomicilio::all();
        return $usuarios;
    }
}
