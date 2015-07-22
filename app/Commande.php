<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
