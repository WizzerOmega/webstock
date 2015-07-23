<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Foundation\Validation\validate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

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
        if ($this->validate($request, [
            'raison_sociale' => 'required|max:50',
            'adresse_1' => 'required|max:38',
            'adresse_2' => 'max:38',
            'adresse_3' => 'max:38',
            'adr4' => 'max:38',
            'codep' => 'required|min:5|max:5',
            'ville' => 'required|max:50',
            'email' => 'required|email'
        ])->fails()) {
            return Redirect::to('client/create')
                ->withErrors($this->validate->errors())
                ->withInput();
        } else {
            $client = new Client;
            $client->code_cli = 'CL00' . date('-Y-m-') . strtoupper(substr(Input::get('rsociale'),0,5));
            $client->rs_cli = Input::get('rsociale');
            $client->adr1_cli = Input::get('adr1');
            $client->adr2_cli = Input::get('adr2');
            $client->adr3_cli = Input::get('adr3');
            $client->cp_cli = Input::get('codep');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $client = new Client;
        $client->getById($id);
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
