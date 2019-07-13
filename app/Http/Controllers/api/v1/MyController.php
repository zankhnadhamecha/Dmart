<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\response;

class MyController extends Controller
{
	//dd('test');
    public function myFunction()
    {
    	$categories = ProductCategory::get();
    	//$categories = ['testest'];
    	return response()->json([$categories]);
    }
}
