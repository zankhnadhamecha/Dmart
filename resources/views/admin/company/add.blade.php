@extends('layouts.app')

@section('content')
	
	<div class="row mt-2">
        <div class="col-md-10">
            <h3>Add Product Company</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('productcompanies.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label class="col-md-2">Category Name</label>
                    <div class="col-md-4">
                        <select name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" @if(old('category_id') == $category->id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Name</label>
                    <div class="col-md-4">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
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