@extends('layouts.app')

@section('content')

	<div class="row mt-2">
        <div class="col-md-10">
            <h3>Edit Product Category</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('productcategories.update', $category->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label class="col-md-2">Name</label>
                    <div class="col-md-4">
                        <input type="text" name="name" value="{{ old('name',$category->name) }}" class="form-control">
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