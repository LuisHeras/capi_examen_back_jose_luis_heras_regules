<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUsuarioDomicilio(){
        $usuarios = User::all();
        $fecha_actual = Carbon::now();
        foreach($usuarios as $user){
            $user->edad = $fecha_actual->diff($user->fecha_nacimiento)->y;
        }
        return $usuarios;
    }
}
