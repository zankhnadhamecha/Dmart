<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductCompany;
use App\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        // $staff = factory(Staff::class, 10)->create();
        /*$users = factory(User::class, 10)->create();
        $user = User::get()->toArray();
        dd($user);*/
    	$categories = ProductCategory::get();
    	$companies = ProductCompany::get();
    	$products = Product::get();
    	// dd($categories);
    	return view('Pages.home',['categories' => $categories, 'companies' => $companies,'products' => $products]);
    }

    public function contact()
    {
    	return view('Pages.contact');
    }

    public function product()
    {
        $categories = ProductCategory::get();
        $companies = ProductCompany::get();
        $products = Product::get();
        return view('Pages.product',compact('categories','companies','products'));
    }

    public function company()
    {
        // $categories = ProductCategory::get();
        $companies = ProductCompany::get();
        // $products = Product::get();
        return view('Pages.company',compact('companies'));
    }

    public function category()
    {
        $categories = ProductCategory::get();
        // $companies = ProductCompany::get();
        // $products = Product::get();
        return view('Pages.category',compact('categories'));
    }

    public function about()
    {
        // $categories = ProductCategory::get();
        // $companies = ProductCompany::get();
        // $products = Product::get();
        return view('Pages.about');
    }
}
