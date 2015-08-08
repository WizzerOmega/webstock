<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    protected $table = 'rdv';
    public $timestamps = false;
 	protected $primaryKey = 'ID_RDV';

    public function getAll()
    {
        return Rdv::all();
        //return DB::select('select * from v_commande');
        //DB::view('v_commande')->get();
    }

    public function getById($idRdv)
    {
        return Rdv::findOrFail($idRdv);
    }
}
