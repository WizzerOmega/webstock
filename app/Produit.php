<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public function getDetailById($idProd)
    {
        /*return DB::select('SELECT LIB_MAT, NB_CON FROM produit
join constituer on produit.ID_PROD = constituer.CON_PTR_ID_PROD
join matiere_premiere on matiere_premiere.ID_MAT = constituer.CON_PTR_ID_MAT
where ID_PROD = :id', ['id' => idProd]);*/
        return DB::table('produit')
                    ->join('constituer', 'produit.ID_PROD', '=', 'constituer.CON_PTR_ID_PROD')
                    ->join('matiere_premiere', 'constituer.CON_PTR_ID_MAT', '=', 'matiere_premiere.ID_MAT')
                    ->where('produit.ID_PROD', $idProd)->get();
    }
}
