<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUsuarioDomicilio(){
        $data = User::with('domicilio')->get();
        $fecha_actual = Carbon::now();
        foreach($data as $user){
            $user->edad = $fecha_actual->diff($user->fecha_nacimiento)->y;
        }
       return array('data' => $data/* , 'headers' => getallheaders() */);
    }
}
