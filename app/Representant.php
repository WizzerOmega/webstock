<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representant extends Model
{
    protected $table = 'representant';
    public $timestamps = false;
    protected $primaryKey = 'ID_REP';

    public function getAll()
    {
        return Representant::all();
    }

    public function getById($id)
    {
        return Representant::findOrFail($id);
    }

    public function getByMailMdp($email, $mdp)
    {
        return Representant::where('MAIL_REP', '=', $email)
                        ->where('MDP_REP', '=', $mdp)
                        ->get();
    }
}
