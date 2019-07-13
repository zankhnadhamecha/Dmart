<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Filesystem\download;
use Illuminate\Http\Request;
// use Illuminate\Http\Response;
use Illuminate\Support\Facades\Response;	
// use Illuminate\Routing\download;

class ProductCategoryController extends Controller
{
    //
	public function getCategories($categories)
	{
		$fields = [];

		foreach ($categories as $category) {
			$fields[] = ['name' => $category->name];
		}

		return $fields;
	}

    public function categories() {
 		$categories = ProductCategory::get();
 		$category = $this->getCategories($categories);
    	return response()->json($category);
    }

    /**************** Download Dile *****************/
    
    public function pdf()
    {
    	$file= public_path(). "/download/Cover page.pdf";
    	$headers = array(
              'Content-Type: application/pdf',
            );
    	return Response::download($file, 'filename.pdf', $headers);
    }
}
