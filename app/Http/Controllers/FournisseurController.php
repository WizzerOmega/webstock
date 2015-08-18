<?php

namespace App\Http\Controllers;

use App\Fournisseur;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Foundation\Validation\validate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

class FournisseurController extends Controller
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
        $fournisseur = new Fournisseur;
        $fournisseurs = $fournisseur->getAll();
        return view('fournisseur.index')->with('fournisseurs', $fournisseurs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('fournisseur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        if ($this->create_validation->fails()) {    
          return Redirect::to('fournisseur/create')
          ->withErrors($this->create_validation->errors())
          ->withInput();
        } else {
            $fournisseur = new Fournisseur;
            $fournisseur->code_fou = 'FO00' . date('-Y-m-') . substr(Input::get('rsociale'),0,5);
            $fournisseur->rs_fou = Input::get('raison_sociale');
            $fournisseur->adr1_fou = Input::get('adr1');
            $fournisseur->adr2_fou = Input::get('adr2');
            $fournisseur->adr3_fou = Input::get('adr3');
            $fournisseur->cp_fou = Input::get('codep');
            $fournisseur->ville_fou = Input::get('ville');
            $fournisseur->mail_fou = Input::get('email');
            $fournisseur->tel_fou = Input::get('tel');
            $fournisseur->fax_fou = Input::get('fax');
            $fournisseur->save();
            return Redirect::to('fournisseur');
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
        $fournisseurC = new Fournisseur;
        $fournisseur = $fournisseurC->getById($id);
        return view('fournisseur.show')->with('fournisseur', $fournisseur);
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
