<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
	protected $table = 'fournisseur';
	public $timestamps = false;
	protected $primaryKey = 'ID_FOU';
	public $incrementing = true;

	public function getAll()
	{
		return Fournisseur::all();
	}

	public function getById($idFou)
	{
		return Fournisseur::findOrFail($idFou);
	}
}
