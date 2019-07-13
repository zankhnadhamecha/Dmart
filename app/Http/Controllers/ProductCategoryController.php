<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productCategories = ProductCategory::get();
        return view('admin.category.list',compact('productCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules = [
            'name' => 'required | string | max:80'
        ];

        $this->formValidation($request->all(),$rules);
        //$category = ProductCategory::create(['name' => $request->name]);
        $cat=ProductCategory::create(['name'=>$request->name]);
        // $productCategory = new ProductCategory;
        // $productCategory->name = $request->name;
        // $productCategory->save();

        // return redirect('categories');
        return redirect()->route('productcategories.index');

        // return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $category = ProductCategory::find($id);
        return view('admin.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = ProductCategory::find($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $rules = [
            'name' => 'required|string|max:80'
        ];

        $this->formValidation($request->all(),$rules);

        $category = ProductCategory::find($id);
        $category->name = $request->name;
        $category->save();

        return redirect()->route('productcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
        ProductCategory::destroy($id);

        if ($request->ajax()) {
            return response()->json(['status' => 200]);
        }

        return redirect()->route('productcategories.index');
    }
}
