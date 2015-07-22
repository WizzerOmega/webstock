<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'produit';
    public $timestamps = false;
    protected $primaryKey = 'ID_PROD';

    public function getAll()
    {
        return Produit::all();
    }

    public function getAllByTypeProduit($idTypeProd)
    {
        return Produit::where('ID_TYPE', '=', $idTypeProd)->get();
    }

    public function getById($idProd)
    {
        return Produit::findOrFail($idProd);
    }
}
