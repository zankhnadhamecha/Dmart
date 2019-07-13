<div class="agile_top_brands_grids">
								@foreach($categories as $category)
									<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											{{-- <div class="agile_top_brand_left_grid_pos">
												<img src="{{ asset('front/images/offer.png') }}" alt=" " class="img-responsive" />
											</div> --}}
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img title=" " alt=" " src="{{ asset('front/images/logo.png') }}" /></a>		
															<p>{{ $category->name }}</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								@endforeach
								<div class="clearfix"> </div>
							</div>