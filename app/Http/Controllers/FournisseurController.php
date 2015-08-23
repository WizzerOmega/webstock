<?php

namespace App\Http\Controllers;

use App\Fournisseur;
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
        $validator = Validator::make($request->all(), [
            'raison_sociale' => 'required|max:50',
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
            return Redirect::to('fournisseur/create')
                ->withErrors($validator->errors())
                ->withInput();
        } else {
            $fournisseur = new Fournisseur;
            $fournisseur->num_fou = 'FO' . date('-Y-m-') . substr(Input::get('rsociale'),0,5);
            $fournisseur->rs_fou = Input::get('raison_sociale');
            $fournisseur->adr1_fou = Input::get('adresse_1');
            $fournisseur->adr2_fou = Input::get('adresse_2');
            $fournisseur->adr3_fou = Input::get('adresse_3');
            $fournisseur->cp_fou = Input::get('code_postal');
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
