<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Rdv;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiRdvController extends Controller
{
    public function getAll()
    {
        $rdv = new Rdv;
        $results = $rdv->getAll();

        return Response()->json(
            $results->toArray(),
            200
        );
    }

    public function getById($idRdv)
    {
        $rdv = new Rdv;
        $result = $rdv->getById($idRdv);

        return Response()->json(
            $result->toArray(),
            200
        );
    }

    public function getByRep($idRep)
    {
        $rdv = new Rdv;
        $result = $rdv->getByRep($idRep);

        return Response()->json(
            $result->toArray(),
            200
        );
    }
}