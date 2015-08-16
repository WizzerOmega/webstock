<?php

namespace App\Http\Controllers\Api;

use App\Stat;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class ApiStatController extends Controller
{
    public function getAll()
    {
        $stat = new Stat;
        $results = $stat->getAll();

        return Response()->json(
            $results->toArray(),
            200
        );
    }
	
	public function getDetail()
    {
        $stat = new Stat;
        $results = $stat->getDetail();

        return Response()->json(
            $results,
            200
        );
    }
	
		public function getStatMensuel()
    {
        $stat = new Stat;
        $results = $stat->getStatMensuel();

        return Response()->json(
            $results,
            200
        );
    }
}