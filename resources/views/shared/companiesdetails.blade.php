<div class="agile_top_brands_grids">
								@foreach($companies as $company)
									<div class="col-md-4 top_brand_left">
										<div class="hover14 column">
											<div class="agile_top_brand_left_grid">
												<div class="agile_top_brand_left_grid_pos">
													{{-- <img src="{{ asset('front/images/offer.png') }}" alt=" " class="img-responsive" /> --}}
												</div>
												<div class="agile_top_brand_left_grid1">
													<figure>
														<div class="snipcart-item block" >
															<div class="snipcart-thumb">
																<a href="products.html"><img title=" " alt=" " src="{{ asset('front/images/logo.png') }}" /></a>		
																<p>{{ $company->name }}</p>
																<div class="stars">
																	<i class="fa fa-star blue-star" aria-hidden="true"></i>
																	<i class="fa fa-star blue-star" aria-hidden="true"></i>
																	<i class="fa fa-star blue-star" aria-hidden="true"></i>
																	<i class="fa fa-star blue-star" aria-hidden="true"></i>
																	<i class="fa fa-star gray-star" aria-hidden="true"></i>
																</div>
																{{-- <h4>$30.99 <span>$45.00</span></h4> --}}
															</div>
															{{-- <div class="snipcart-details top_brand_home_details">
																<form action="#" method="post">
																	<fieldset>
																		<input type="hidden" name="cmd" value="_cart" />
																		<input type="hidden" name="add" value="1" />
																		<input type="hidden" name="business" value=" " />
																		<input type="hidden" name="item_name" value="basmati rise" />
																		<input type="hidden" name="amount" value="30.99" />
																		<input type="hidden" name="discount_amount" value="1.00" />
																		<input type="hidden" name="currency_code" value="USD" />
																		<input type="hidden" name="return" value=" " />
																		<input type="hidden" name="cancel_return" value=" " />
																		<input type="submit" name="submit" value="Add to cart" class="button" />
																	</fieldset>
																</form>
															</div> --}}
														</div>
													</figure>
												</div>
											</div>
										</div>
									</div>
								@endforeach
								{{-- <div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
												<img src="{{ asset('front/images/offer.png') }}" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img title=" " alt=" " src="{{ asset('front/images/7.png') }}" /></a>		
															<p>Sona-masoori-rice</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>$35.99 <span>$55.00</span></h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
																	<input type="hidden" name="amount" value="35.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
												<img src="{{ asset('front/images/offer.png') }}" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img title=" " alt=" " src="{{ asset('front/images/8.png') }}" /></a>		
															<p>Milky-mist-paneer</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>$30.99 <span>$45.00</span></h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="basmati rise" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
												<img src="{{ asset('front/images/offer.png') }}" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid_pos">
												<img src="{{ asset('front/images/offer.png') }}" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block">
														<div class="snipcart-thumb">
															<a href="products.html"><img src="{{ asset('front/images/9.png') }}" alt=" " class="img-responsive" /></a>
															<p>Basmati-Rice</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>$80.99 <span>$105.00</span></h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Pepsi soft drink" />
																	<input type="hidden" name="amount" value="80.00" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>--}}
								<div class="clearfix"> </div>
							</div>