<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Commande extends Model
{
    protected $table = 'commande';
    public $timestamps = false;
    protected $primaryKey = 'ID_COM';

    public function getAll()
    {
        return Commande::all();
        //return DB::select('select * from v_commande');
        //DB::view('v_commande')->get();
    }

    public function getById($idCmd)
    {
        return Commande::findOrFail($idCmd);
    }

    public function getDetailByNum($numCmd)
    {
        return DB::table('commande')
                    ->join('client', 'client.ID_CLI', '=', 'commande.ID_CLI')
                    ->join('composer', 'composer.ID_COM', '=', 'commande.ID_COM')
                    ->join('ligne_commande', 'ligne_commande.ID_LIGNE', '=', 'composer.ID_LIGNE')
                    ->join('associer', 'associer.ID_LIGNE', '=', 'ligne_commande.ID_LIGNE')
                    ->join('produit', 'produit.ID_PROD', '=', 'associer.ID_PROD')
                    ->select('NUM_PROD', 'LIB_PROD', 'NUM_CLI', 'RS_CLI', DB::raw('SUM(composer.MONTANT)'), 'DATE_COM', 'DATE_LIVRAISON_COM')
                    ->where('NUM_COM', $numCmd)->get();
    }

}
