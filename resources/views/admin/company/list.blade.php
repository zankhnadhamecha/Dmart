@extends('layouts.app')

@section('content')

	<div class="row mt-2">
        <div class="col-md-10">
            <h3>Product Company List</h3>
        </div>
        <div class="col-md-2">
            <a href="{{ route('productcompanies.create') }}" class="btn btn-success">Add +</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Sr no</th>
                        <th>Category Name</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productCompanies as $key => $company)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $company->productCategory->name }}</td>
                            <td>{{ $company->name }}</td>
                            <td>
                                <a href="{{ route('productcompanies.show', $company->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('productcompanies.edit', $company->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('productcompanies.destroy', $company->id) }}" class="btn btn-danger act-delete">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection