<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCompany extends Model
{
    public function productCategory() {
    	return $this->belongsTo('\App\Models\ProductCategory');
    }
    
    public function product() {
    	return $this->hasMany('\App\Models\Product');
    }

    // public function getNameAttribute($value='') {
    // 	return strtoupper($value);
    // }
}
