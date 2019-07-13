<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // public function company() {
    // 	return $this->belongsTo('\App\Models\ProductCompany', 'product_company_id', 'id');
    // }

    public function productCompany() {
        return $this->belongsTo('\App\Models\ProductCompany');
    }
    
    public function usercart() {
    	return $this->hasMany('\App\Models\UserCart','product_id','id');
    }
    public function billinfo() {
    	return $this->hasMany('\App\Models\BillInfo');
    }
    public function return() {
    	return $this->hasMany('\App\Models\Return');
    }
    public function feedback() {
    	return $this->hasMany('\App\Models\Feedback');
    }
    public function getNameAttribute($value='') {
        return strtoupper($value);
    }
}
