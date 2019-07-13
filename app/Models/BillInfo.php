<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillInfo extends Model
{
    public function bill() {
    	return $this->belongsTo('\App\Models\Bill');
    }
    public function product() {
    	return $this->belongsTo('\App\Models\Product');
    }
}
