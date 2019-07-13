<!-- header -->
<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				{{-- <gp>SALE UP TO 70% OFF. USE CODE "SALE70%" . <a href="products.html">SHOP NOW</a></p> --}}
			</div>
			<div class="agile-login">
				<ul>
					@guest
					<li><a href="{{ route('register') }}"> Create Account </a></li>
					<li><a href="{{ route('login') }}">Login</a></li>
					@endguest
					@auth
					<li><a href="{{ route('dashboard') }}"> Dashboard </a></li>
					<li><a id="logout" href="">Logout</a></li>
					<form id="frmlogout" method="post" action="{{ route('logout') }}">
						@csrf
					</form>
					@endauth
					{{-- <li><a href="contact.html">Help</a></li> --}}
					
				</ul>
			</div>
			<div class="product_list_header">  
					<form action="#" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>  
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
{{-- style="position: -webkit-sticky; position: sticky; top: ; background-color: yellow; padding: 50px; font-size: 20px; " --}}
	<div class="logo_products" > <div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+0123) 234 567</li>
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.html"><img src="{{ asset('front/images/logo.png') }}"></a></h1>
			</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">	
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li><a href="{{ url('/') }}" class="act">Home</a></li>			
									<!-- Mega Menu -->
									{{-- <li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Groceries<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Groceries</h6>
														<li><a href="{{ asset('groceries.html') }}">Dals & Pulses</a></li>
														<li><a href="{{ asset('groceries.html') }}">Almonds</a></li>
														<li><a href="{{ asset('groceries.html') }}">Cashews</a></li>
														<li><a href="{{ asset('groceries.html') }}">Dry Fruit</a></li>
														<li><a href="{{ asset('groceries.html') }}"> Mukhwas </a></li>
														<li><a href="{{ asset('groceries.html') }}">Rice & Rice Products</a></li>
													</ul>
												</div>	
												
											</div>
										</ul>
									</li> --}}
									{{-- <li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Household<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Household</h6>
														<li><a href="{{ asset('household.html') }}">Cookware</a></li>
														<li><a href="{{ asset('household.html') }}">Dust Pans</a></li>
														<li><a href="{{ asset('household.html') }}">Scrubbers</a></li>
														<li><a href="{{ asset('household.html') }}">Dust Cloth</a></li>
														<li><a href="{{ asset('household.html') }}"> Mops </a></li>
														<li><a href="{{ asset('household.html') }}">Kitchenware</a></li>
													</ul>
												</div>
												
												
											</div>
										</ul>
									</li> --}}
									{{-- <li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Categories</h6>
														<li><a href="{{ asset('front/personalcare.html') }}">
															@foreach($categories as $category)
																<li><a href="{{ asset('front/personalcare.html') }}">{{ $category->name }}</a></li>
															@endforeach
														Baby Soap</a></li>
														<li><a href="{{ asset('front/personalcare.html') }}">Baby Care Accessories</a></li>
														<li><a href="{{ asset('front/personalcare.html') }}">Baby Oil & Shampoos</a></li>
														<li><a href="{{ asset('front/personalcare.html') }}">Baby Creams & Lotion</a></li>
														<li><a href="{{ asset('front/personalcare.html') }}"> Baby Powder</a></li>
														<li><a href="{{ asset('front/personalcare.html') }}">Diapers & Wipes</a></li>
													</ul>
												</div>
												
											</div>
										</ul>
									</li> --}}
									{{-- <li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Company<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Companies</h6>
														@foreach($companies as $company)
															<li><a href="{{ asset('front/personalcare.html') }}">{{ $company->name }}</a></li>
														@endforeach
														<li><a href="{{ asset('front/packagedfoods.html') }}">Baby Food</a></li>
														<li><a href="{{ asset('front/packagedfoods.html') }}">Dessert Items</a></li>
														<li><a href="{{ asset('front/packagedfoods.html') }}">Biscuits</a></li>
														<li><a href="{{ asset('front/packagedfoods.html') }}">Breakfast Cereals</a></li>
														<li><a href="{{ asset('front/packagedfoods.html') }}"> Canned Food </a></li>
														<li><a href="{{ asset('front/packagedfoods.html') }}">Chocolates & Sweets</a></li>
													</ul>
												</div>
												
											
											</div>
										</ul>
									</li> --}}
									{{-- <li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Tea & Coeffe</h6>
														<li><a href="{{ asset('front/beverages.html') }}">Green Tea</a></li>
														<li><a href="{{ asset('front/beverages.html') }}">Ground Coffee</a></li>
														<li><a href="{{ asset('front/beverages.html') }}">Herbal Tea</a></li>
														<li><a href="{{ asset('front/beverages.html') }}">Instant Coffee</a></li>
														<li><a href="{{ asset('front/beverages.html') }}"> Tea </a></li>
														<li><a href="{{ asset('front/beverages.html') }}">Tea Bags</a></li>
													</ul>
												</div>
							
											</div>
										</ul>
									</li> --}}
									{{-- <li><a href="{{ asset('front/gourmet.html') }}">Gourmet</a></li> --}}
									{{-- <li><a href="{{ asset('front/offers.html') }}">Offers</a></li> --}}
									<li><a href="{{ route('category') }}">Categories</a></li>
									<li><a href="{{ route('company') }}">Companies</a></li>
									<li><a href="{{ route('product') }}">Products</a></li>
									<li><a href="{{ route('about') }}">About Us</a></li>
									<li><a href="{{ route('contact') }}">Contact</a></li>
								</ul>
							</div>
							</nav>
			</div>
		</div>
		
<!-- //navigation -->

    @yield('breadcrumbs')