<?php 
namespace App\Models;

use App\Models\User;

class Produk extends Model{
	protected $table =  'product';

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}

}