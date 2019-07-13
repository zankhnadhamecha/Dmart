@extends('layouts.app')

@section('content')

	<div class="row mt-2">
        <div class="col-md-10">
            <h3>Edit Product Category</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('productcompanies.update', $productCompany->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label class="col-md-2">Category Name</label>
                    <div class="col-md-4">
                        {{-- <input type="text" name="name" value="{{ old('name',$category->name) }}" class="form-control"> --}}
                        <select class="form-control" name="category_id">
                            @foreach($productCategories as $productCategory)
                                <option value="{{ $productCategory->id }}" @if($productCompany->productcategory->id == $productCategory->id) selected 
                                    @elseif(old('category_id') == $productCategory->id) selected @endif>{{ $productCategory->name }}</option>
                            @endforeach
                        </select>
                        @error('category_name')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Name</label>
                    <div class="col-md-4">
                        <input type="text" name="name" value="{{ old('name',$productCompany->name) }}" class="form-control">
                        @error('name')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

@endsection