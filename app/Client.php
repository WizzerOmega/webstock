<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';
    public $timestamps = false;
 	protected $primaryKey = 'ID_CLI';

    public function getAll()
    {
        return Client::all();
        //return DB::select('select * from v_commande');
        //DB::view('v_commande')->get();
    }

    public function getById($idCli)
    {
        return Client::findOrFail($idCli);
    }

    public function deleteById($idCli)
    {
        $client = $this->getById($idCli);
        $client->delete();
    }
}
