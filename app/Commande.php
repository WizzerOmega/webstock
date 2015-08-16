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
                    ->select('client.NUM_CLI', 'client.ID_CLI', 'client.RS_CLI', 'client.ADR1_CLI', 'client.ADR2_CLI', 'client.ADR3_CLI', 'client.CP_CLI', 'client.VILLE_CLI', 'commande.NUM_COM', 'ligne_commande.ID_LIGNE', 'produit.NUM_PROD', 'produit.LIB_PROD', 'produit.PRIX_PROD', 'ligne_commande.QTE_LIGNE', DB::raw('SUM(composer.MONTANT)'), 'commande.DATE_COM', 'commande.DATE_LIVRAISON_COM')
                    ->groupBy('client.NUM_CLI', 'client.ID_CLI', 'client.RS_CLI', 'client.ADR1_CLI', 'client.ADR2_CLI', 'client.ADR3_CLI', 'client.CP_CLI', 'client.VILLE_CLI', 'commande.NUM_COM', 'ligne_commande.ID_LIGNE', 'produit.NUM_PROD', 'produit.LIB_PROD', 'produit.PRIX_PROD', 'ligne_commande.QTE_LIGNE', 'commande.DATE_COM', 'commande.DATE_LIVRAISON_COM')
					->where('NUM_COM', $numCmd)->get();
    }

}
