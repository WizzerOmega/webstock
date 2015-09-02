<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Representant;
use Hash;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiAuthController extends Controller
{

    public function getByLoginMdp($email, $mdp)
    {
        $rep = new Representant;
        $representant = $rep->getByMailMdp($email, $mdp);

        return Response()->json(
            $representant,
            200
        );
    }
}
