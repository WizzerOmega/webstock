<?php

namespace App\Http\Controllers;

use App\Client;
use App\Commande;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Contracts\Validation;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;
use Validator;

class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $client = new Client;
        $clients = $client->all();
        return view('client.index')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'raison_sociale' => 'required|max:50',
            'numero_siret' => 'required|min:14|max:14',
            'adresse_1' => 'required|max:38',
            'adresse_2' => 'max:38',
            'adresse_3' => 'max:38',
            'code_postal' => 'required|min:5|max:5',
            'ville' => 'required|max:50',
            'email' => 'required|email',
            'tel' => 'min:10|max:50',
            'fax' => 'min:10|max:50'
        ]);
        if ($validator->fails()) {
            return Redirect::to('client/create')
                ->withErrors($validator->errors())
                ->withInput();
        } else {
            $client = new Client;
            $client->num_cli = 'CL00' . date('-Y-m-') . strtoupper(substr(Input::get('raison_sociale'),0,5));
            $client->rs_cli = Input::get('raison_sociale');
            $client->adr1_cli = Input::get('adresse_1');
            $client->adr2_cli = Input::get('adresse_2');
            $client->adr3_cli = Input::get('adresse_3');
            $client->cp_cli = Input::get('code_postal');
            $client->ville_cli = Input::get('ville');
            $client->mail_cli = Input::get('email');
            $client->tel_cli = Input::get('tel');
            $client->fax_cli = Input::get('fax');
            $client->save();
            return Redirect::to('client');
        }
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
        $commandes = $cmd->getAllByClient($id);
        $cli = new Client;
        $client = $cli->getById($id);
        return view('client.show')->with('commandes', $commandes)->with('client', $client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $cli = new Client;
        $client = $cli->getById($id);
        return view('client.edit')->with('client', $client);
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
        $client = new Client;
        $client->deleteById($id);
        return Redirect::to('client');
    }
}
