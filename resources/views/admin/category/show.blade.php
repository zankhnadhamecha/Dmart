@extends('layouts.app')

@section('content')

	<div class="row mt-2">
        <div class="col-md-10">
            <h3>Product Company List</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                   		<td>{{ $category->name }}</td>
                   </tr>
                </tbody>
            </table>
        </div>
    </div>
	
@endsection