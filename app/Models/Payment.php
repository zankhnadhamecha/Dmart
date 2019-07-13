<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function bill() {
    	return $this->belongsTo('\App\Models\Bill');
    }
}
