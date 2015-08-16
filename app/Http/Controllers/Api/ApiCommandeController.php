<?php

namespace App\Http\Controllers\Api;

use App\Commande;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class ApiCommandeController extends Controller
{
    public function getAll()
    {
        $cmd = new Commande;
        $results = $cmd->getAll();

        return Response()->json(
            $results,
            200
        );
    }

    public function getById($idCmd)
    {
        $cmd = new Commande;
        $result = $cmd->getById($idCmd);

        return Response()->json(
            $result->toArray(),
            200
        );
    }

    public function getDetailByNum($numCmd)
    {
        $cmd = new Commande;
        $result = $cmd->getDetailByNum($numCmd);

        return Response()->json(
            $result,
            200
        );
    }
}
