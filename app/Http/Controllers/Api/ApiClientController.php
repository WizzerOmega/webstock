<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiClientController extends Controller
{
    public function getAll()
    {
        $cli = new Client;
        $results = $cli->getAll();

        return Response()->json(
            $results->toArray(),
            200
        );
    }

    public function getById($idCli)
    {
        $cli = new Client;
        $result = $cli->getById($idCli);

        return Response()->json(
            $result->toArray(),
            200
        );
    }
}
