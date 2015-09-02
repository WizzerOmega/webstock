<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representant extends Model
{
    protected $table = 'representant';
    public $timestamps = false;
    protected $primaryKey = 'ID_REP';

    public function getByMailMdp($email, $mdp)
    {
        return Representant::where('MAIL_REP', '=', $email)
                        ->where('MDP_REP', '=', $mdp)
                        ->get();
    }
}
