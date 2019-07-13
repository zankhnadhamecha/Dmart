<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductCompany;
use Illuminate\Database\Query\raw;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function test()
    {
    	// $categories = ProductCategory::all();
    	// $categories = ProductCompany::get();
    	// $categories = ProductCompany::where('name','parle')->get();
    	// $categories = ProductCompany::where('name','like','p%')->get();
    	// $categories = Product::where('price','<',100)->get();
        // $categories = Product::orderBy("name","desc")->get()->toArray();
        // $categories = Product::orderBy("name")->first()->toArray();
        // $categories = Product::orderBy("name","desc")->get()->last()->toArray();

        /* $categories = ProductCompany::whereHas('product',function($query){
            $query->where('price','<',100);
        })->get();*/

        // $categories = ProductCompany::with('product')->get()->toArray();
        // $categories = Product::selectRaw('COUNT(*) AS total'))->groupBy("updated_at")->get();
        // dd($categories);

        $categories = Product::with('productCompany')->get();
        $categories = ProductCompany::with('productCategory')->get();
        //dd($categories);
    	foreach ($categories as $key => $category) {
    		
    		/*$data = ProductCompany::select('name')->where('id',$category['product_company_id'])->get();
    		foreach($data as $d)
    		{
    			dump($d->name);
    		}*/
            /*foreach ($category->product as $value) {
                # code...
                dump($category->name."======".$value->name);
            }*/
            dump($category->name . " ===== " . $category->productCategory->name);
    		
    	}
    }
    public function category()
    {
        $categories = ProductCategory::get();

        foreach ($categories as $category) {
            dump($category->name);
        }
    }
    public function company()
    {
        $companies = ProductCompany::get();

        foreach ($companies as $company) {
            dump($company->name . " ==== " . $company->productCategory->name);
        }
    }
    public function product()
    {
        $products = Product::get();
        /*$cat1 = '';
        $cat2 = '';
        foreach ($products as $product) {
            $cat1 = $product->productCompany->name;
            if($cat1 != $cat2)
            {
                // dump($product->name . " ==== ". $product->price . " ==== " . $product->productCompany->name . " ==== " . $product->productCompany->productCategory->name);
                dump($product->productCompany->name . " ===== " . $product->name);
            }
            else
            {
                $str = str_repeat(' ',strlen($cat1)+7); 
                dump($str.$product->name);
            }
            $cat2 = $product->productCompany->name;
        }*/
        $com1 = '';
        $com2 = '';
        $cat1 = '';
        $cat2 = '';
        foreach ($products as $product) {
            $cat1 = $product->productCompany->productCategory->name;
            if($cat1 != $cat2)
            {
                dump("");
                // dump($product->name . " ==== ". $product->price . " ==== " . $product->productCompany->name . " ==== " . $product->productCompany->productCategory->name);
                $com1 = $product->ProductCompany->name;
                if($com1 != $com2)
                {
                    dump($cat1 . " ===== " . $com1 . " ===== " . $product->name);
                }
                else
                {
                    dump($cat1 . " ===== " . str_repeat(' ',strlen($com1)) . " ===== " . $product->name);   
                }
                $com2 = $com1;
            }
            else
            {
                $com1 = $product->ProductCompany->name;
                if($com1 != $com2)
                {
                    dump(str_repeat(" ",strlen($cat1)+7) . $com1 . " ===== " . $product->name);
                }
                else
                {
                    dump(str_repeat(" ",strlen($cat1)+7) . str_repeat(' ',strlen($com1)+7) . $product->name);   
                }
                $com2 = $com1;
            }
            $cat2 = $cat1;
        }
    }
}
