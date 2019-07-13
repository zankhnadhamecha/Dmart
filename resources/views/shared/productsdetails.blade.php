@php
	$i = 0;
@endphp
@foreach($products as $product)
	
	<div class="agile_top_brands_grids">
		<div class="col-md-3 top_brand_left-1">
			<div class="hover14 column">
				<div class="agile_top_brand_left_grid">
					<div class="agile_top_brand_left_grid_pos">
						<img src="{{ asset('front/images/offer.png') }}" alt=" " class="img-responsive">
					</div>
					<div class="agile_top_brand_left_grid1">
						<figure>
							<div class="snipcart-item block">
								<div class="snipcart-thumb">
									<a href="products.html"><img title=" " alt=" " src="{{ asset('front/images/14.png') }}"></a>		
									<p>{{ $product->name }}</p>
									<div class="stars">
										<i class="fa fa-star blue-star" aria-hidden="true"></i>
										<i class="fa fa-star blue-star" aria-hidden="true"></i>
										<i class="fa fa-star blue-star" aria-hidden="true"></i>
										<i class="fa fa-star blue-star" aria-hidden="true"></i>
										<i class="fa fa-star gray-star" aria-hidden="true"></i>
									</div>
										<h4>{{ $product->price-($product->discount*$product->price)/100 }}<span>{{ $product->price }}</span></h4>
								</div>
								<div class="snipcart-details top_brand_home_details">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="business" value=" ">
											<input type="hidden" name="item_name" value={{ $product->name }}>
											<input type="hidden" name="amount" value={{ $product->price }}>
											<input type="hidden" name="discount_amount" value={{ $product->price-($product->discount*$product->price)/100 }}>					
											<input type="hidden" name="currency_code" value="RS">
											<input type="hidden" name="return" value=" ">
											<input type="hidden" name="cancel_return" value=" ">
											<input type="submit" name="submit" value="Add to cart" class="button">
										</fieldset>
									</form>
								</div>
							</div>
						</figure>
					</div>
				</div>
			</div>
		</div>
	</div>

	@php
		$i++;
	@endphp

	@if($i == 4)
		<div class="clearfix"> </div>
		@php $i = 0; @endphp
	@endif
				
@endforeach

<div class="clearfix"> </div>