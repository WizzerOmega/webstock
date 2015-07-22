<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Produit;
use App\TypeProduit;
use Illuminate\Http\Request;

class ApiProduitController extends Controller
{
    public function getAll()
    {
        $prod = new Produit;
        $results = $prod->getAll();

        return Response()->json(
            $results->toArray(),
            200
        );
    }

    public function getById($idProd)
    {
        $prod = new Produit;
        $result = $prod->getById($idProd);

        return Response()->json(
            $result,
            200
        );
    }

    public function getAllTypeProduit()
    {
        $tprod = new TypeProduit;
        $results = $tprod->getAll();

        return Response()->json(
            $results->toArray(),
            200
        );
    }

    public function getAllByTypeProduit($idTypeProd)
    {
        $prod = new Produit;
        $results = $prod->getAllByTypeProduit($idTypeProd);

        return Response()->json(
            $results->toArray(),
            200
        );
    }
}
