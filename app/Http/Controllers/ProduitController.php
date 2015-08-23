<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Matiere;
use App\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
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
        $produit = new Produit;
        $produits = $produit->getAll();
        return view('produit.index')->with('produits', $produits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $produit = new Produit;
        $produits = $produit->getAll();
        $matiere = new Matiere;
        $matieres = $matiere->getAll();
        return view('produit.create')->with('produits', $produits)->with('matieres', $matieres);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $prod = new Produit;
        $detail = $prod->getDetailById($id);
        if (!empty($detail)) {
            $msg = '';
            return view('produit.show')->with('detailP', $detail)->with('msg', $msg);
        } else {
            $msg = 'Aucune nomenclature n\'est disponible pour ce produit';
            return view('produit.show')->with('msg', $msg);
        }
        

        /*$produit = new Produit;
        $prod = $produit->find($idProduit);
        $pieces = $produit->getNomenclatureProduit($idProduit);
        return View::make('produit.show')->with('pieces', $pieces)->with('prod', $prod);*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $prod = new Produit;
        $detail = $prod->getDetailById($id);
        if (!empty($detail)) {
            $msg = '';
            return view('produit.show')->with('detailP', $detail)->with('msg', $msg);
        } else {
            $msg = 'Aucune nomenclature n\'est disponible pour ce produit';
            return view('produit.show')->with('msg', $msg);
        }
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
