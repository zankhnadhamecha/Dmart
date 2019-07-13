@extends('layouts.app')

@section('content')

	<div class="products">

		<div class="container">

			@include('shared.categoriesdetails')

			<div class="clearfix"> </div>

		</div>
		
	</div>
	
	
@endsection

@section('breadcrumbs')

<div class="breadcrumbs">
	<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Categories</li>
			</ol>
		</div>
</div>
@endsection