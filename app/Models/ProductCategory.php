<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
	protected $guarded = [];

    public function productCompany() {
    	return $this->hasMany('\App\Models\ProductCompany');
    }
}
