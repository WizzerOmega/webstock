<?php

namespace App\Http\Controllers;

use App\Client;
use App\Commande;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class CommandeClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $commande = new Commande;
        $commandes = $commande->getAll();
        return view('commande.index')->with('commandes', $commandes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $cmd = new Commande;
        $detailCom = $cmd->find($id);
        /*$cmdClis = $cmd->getProduitCommande($id);
        $client = new Client;
        $detailCli = $client->getById($idCli);
        return View::make('commande.show')
                            ->with('detailCom', $detailCom)
                            ->with('cmdClis', $cmdClis)
                            ->with('detailCli', $detailCli);*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
