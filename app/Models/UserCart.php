<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCart extends Model
{
    public function user() {
    	return $this->belongsTo('\App\User');
    } 
    public function product() {
    	return $this->belongsTo('\App\Models\Product');
    }
    public function bill() {
    	return $this->hasMany('\App\Models\Bill');
    }
}
