<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Representant;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiRepresentantController extends Controller
{
    public function getAll()
    {
        $rep = new Representant;
        $results = $rep->getAll();

        return Response()->json(
            $results->toArray(),
            200
        );
    }

    public function getById($idRep)
    {
        $rep = new Representant;
        $result = $rep->getById($idRep);

        return Response()->json(
            $result->toArray(),
            200
        );
    }
}
