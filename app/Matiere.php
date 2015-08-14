<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $table = 'matiere_premiere';
    public $timestamps = false;
    protected $primaryKey = 'ID_MAT';

    public function getAll()
    {
        return Matiere::all();
    }

    public function getById($idMat)
    {
        return Matiere::findOrFail($idMat);
    }
}
