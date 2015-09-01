<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiAuthController extends Controller
{

    public function getByLoginMdp($login, $mdp)
    {
        $user = array(
                'email' => $login, 
                'password' => $mdp
            );
        
        Auth::attempt($user);
        $user = Auth::user();
        Auth::logout();

        return Response()->json(
            $user,
            200
        );
    }
}
