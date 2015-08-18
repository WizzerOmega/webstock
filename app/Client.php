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
