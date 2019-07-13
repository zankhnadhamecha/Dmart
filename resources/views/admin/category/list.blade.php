@extends('layouts.app')

@section('content')

	<div class="row mt-2">
        <div class="col-md-10">
            <h3>Product Category List</h3>
        </div>
        <div class="col-md-2">
            <a href="{{ route('productcategories.create') }}" class="btn btn-success">Add +</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Sr no</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productCategories as $key => $category)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="{{ route('productcategories.show', $category->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('productcategories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('productcategories.destroy', $category->id) }}" class="btn btn-danger act-delete">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection