<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\ProductCompany;
use Illuminate\Http\Request;

class ProductCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productCompanies = ProductCompany::get();
        return view('admin.company.list', compact('productCompanies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = ProductCategory::get();
        return view('admin.company.add', compact('categories'));
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
            'category_id' => 'required|numeric',
            'name' => 'required|string|max:80',
        ];

        $this->formvalidation($request->all(),$rules);

        $productCompany = new ProductCompany;
        $productCompany->product_category_id = $request->category_id;
        $productCompany->name = $request->name;
        $productCompany->save();

        // dd($ProductCompany);

        return redirect()->route("productcompanies.index");
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
        $productCompany = ProductCompany::find($id);
        return view('admin.company.show',compact('productCompany'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $productCategories = ProductCategory::get();
        $productCompany = ProductCompany::find($id);
        return view('admin.company.edit',compact('productCompany','productCategories'));
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
            'name' => 'required|string|max:80',
            'category_id' => 'required|numeric'
        ];

        $this->formvalidation($request->all(),$rules);

        $productCompany = ProductCompany::find($id);
        // dd($productCompany);
        $productCompany->product_category_id = $request->category_id;
        $productCompany->name = $request->name;
        $productCompany->save();

        return redirect()->route('productcompanies.index');
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
        ProductCompany::destroy($id);

        if($request->ajax()) {
            return response()->json(['status' => 200]);
        }

        return redirect()->route('productcompanies.index');

    }
}
