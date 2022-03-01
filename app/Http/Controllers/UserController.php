<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class UserController extends Controller
{
    public function index(){
        $users = User::join('user_domicilio', 'users.id', 'user_domicilio.user_id')
        ->select('users.name','users.email', 'users.fecha_nacimiento',
        'user_domicilio.domicilio',
        'user_domicilio.numero_exterior','user_domicilio.colonia', 'user_domicilio.cp', 'user_domicilio.ciudad',
        DB::raw('TIMESTAMPDIFF(YEAR,  fecha_nacimiento, CURDATE()) AS age')

        )
        ->get();
        return response()->Json([
            'response' => $users
        ]);
    }
}
