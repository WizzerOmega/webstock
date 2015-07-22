<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeProduit extends Model
{
    protected $table = 'type_produit';
    public $timestamps = false;
 	protected $primaryKey = 'ID_TYPE';

    public function getAll()
    {
        return TypeProduit::all();
    }
}
