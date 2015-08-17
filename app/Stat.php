<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Stat extends Model
{
    protected $table = 'commande';
    public $timestamps = false;
    protected $primaryKey = 'ID_COM';

    public function getAll()
    {
		return Stat::all();
        /*return DB::table('associer')
		->join('ligne_commande', 'associer.ID_LIGNE', '=', 'ligne_commande.ID_ligne')
		->join('composer', 'ligne_commande.ID_LIGNE', '=', 'composer.ID_ligne')
		->join('commande', 'composer.ID_COM', '=', 'commande.ID_COM')
		->select('associer.QTE_PRO_ART', 'MONTH(commande.DATE_COM)')
		->groupBy('MONTH(commande.DATE_COM)');*/
    }
	
	public function getDetail()
    {
        return DB::table('commande')
		->join('composer', 'composer.ID_COM', '=', 'commande.ID_COM')
		->join('associer', 'associer.ID_LIGNE', '=', 'composer.ID_LIGNE')
		->join('produit', 'produit.ID_PROD', '=', 'associer.ID_PROD')
		->select('LIB_PROD', DB::raw('SUM(QTE_PRO_ART) as QTE'))
		->groupBy('LIB_PROD')->get();
    }
	
	public function getStatMensuel()
    {
        return DB::table('commande')
		->join('composer', 'composer.ID_COM', '=', 'commande.ID_COM')
		->join('associer', 'associer.ID_LIGNE', '=', 'composer.ID_LIGNE')
		->join('produit', 'produit.ID_PROD', '=', 'associer.ID_PROD')
		->select(DB::raw('SUM(QTE_PRO_ART) as QTE'), DB::raw('MONTH(commande.DATE_COM) as MOIS'))
		->groupBy(DB::raw('MONTH(DATE_COM)'))->get();
    }
}
