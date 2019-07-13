<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function user() {
    	return $this->belongsTo('\App\User');
    }
    public function billinfo() {
    	return $this->hasMany('\App\Models\BillInfo');
    }
    public function payment() {
    	return $this->hasOne('\App\Models\Payment');
    }
    public function return() {
    	return $this->hasMany('\App\Models\Return');
    }
}
