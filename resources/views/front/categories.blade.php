@extends('front.component.layout');

@section('title', 'Category')

	@section('content')

	<div class="super_container">

	

		<div class="container product_section_container">
			<div class="row">
				<div class="col product_section clearfix">
	
					<!-- Breadcrumbs -->
	
					<div class="breadcrumbs d-flex flex-row align-items-center">
						
					</div>
	
					<!-- Sidebar -->
	
					<div class="sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">
								<h5>Product Category</h5>
							</div>
							<ul class="sidebar_categories">
								<li><a href="#">Men</a></li>
								<li><a href="#">Women</a></li>
								<li><a href="#">Accessories</a></li>
								
							</ul>
						</div>
	
						
	
						
	
					</div>
	
					<!-- Main Content -->
	
					<div class="main_content">
	
						<!-- Products -->
	
						<div class="products_iso">
							<div class="row">
								<div class="col">
	
									
	
									<!-- Product Grid -->
	
									<div class="product-grid">
	
	

										<div id="accessories ">
											<!-- Product 1 -->
											
											<div class="product-item women">
												<div class="product product_filter">
													<div class="product_image">
														<img src="front/images/product_2.png" alt="">
													</div>
													<div class="favorite"></div>
													<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"></div>
													<div class="product_info">
														<h6 class="product_name"><a href="{{route('description')}}">Coach, accessible luxury and signature logo bag.</a></h6>
														<div class="product_price">$610.00</div>
													</div>
												</div>
												<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
											</div>
											<!-- Product 2 -->
					
					
					
											<!-- Product 3 -->
											<div class="product-item accessories">
												<div class="product discount product_filter">
													<div class="product_image">
														<img src="front/images/product_6.png" alt="">
													</div>
													<div class="favorite favorite_left"></div>
													<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"></div>
													<div class="product_info">
														<h6 class="product_name"><a href="{{route('description')}}">Carrera, sporty and aviator-style sunglasses with a retro touch.</a></h6>
														<div class="product_price">$520.00</div>
													</div>
												</div>
												<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
											</div>
											
					
											<!-- Product 4 -->
					
											<div class="product-item accessories">
												<div class="product product_filter">
													<div class="product_image">
														<img src="front/images/product_8.png" alt="">
													</div>
													<div class="favorite"></div>
													<div class="product_info">
														<h6 class="product_name"><a href="{{route('description')}}">Longchamp, Functional and stylish Le Pliage bags.</a></h6>
														<div class="product_price">$120.00</div>
													</div>
												</div>
												<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
											</div>
					
											{{-- Product 5 --}}
											<div class="product-item accessories" >
												<div class="product product_filter">
													<div class="product_image">
														<img src="front/images/product_4.png" alt="">
													</div>
													<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"></div>
													<div class="favorite favorite_left"></div>
													<div class="product_info">
														<h6 class="product_name"><a href="{{route('description')}}">Givenchy,blend of modern and edgy designs in handbags.</a></h6>
														<div class="product_price">$410.00</div>
													</div>
												</div>
												<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
											</div>
					
										</div>
					
										<div id="women">
												<!-- Product 6 -->
												<div class="product-item women" data-name="one">
													<div class="product product_filter">
														<div class="product_image">
															<img src="front/images/product_3.png" alt="">
														</div>
														<div class="favorite"></div>
														<div class="product_info">
															<h6 class="product_name"><a href="{{route('description')}}">Givenchy,luxury and contemporary sweater designs</a></h6>
															<div class="product_price">$120.00</div>
														</div>
													</div>
													<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
												</div>
													<!-- Product 7 -->
					
												<div class="product-item women" >
													<div class="product product_filter">
														<div class="product_image">
															<img src="front/images/product_7.png" alt="">
														</div>
														<div class="favorite"></div>
														<div class="product_info">
															<h6 class="product_name"><a href="{{route('description')}}">Vince,luxury and contemporary sweater designs</a></h6>
															<div class="product_price">$610.00</div>
														</div>
													</div>
													<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
												</div>
												<!-- Product 8 -->
					
												
					
												<div class="product-item women men" >
													<div class="product product_filter">
														<div class="product_image">
															<img src="front/images/product_5.png" alt="">
														</div>
														<div class="favorite"></div>
														<div class="product_info">
															<h6 class="product_name"><a href="{{route('description')}}">Columbus Shoes, wide range of footwear options, from sports shoes to formal shoes</a></h6>
															<div class="product_price">$180.00</div>
														</div>
													</div>
													<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
												</div>
												<!-- Product 9 -->
													<div class="product-item men">
														<div class="product product_filter">
															<div class="product_image">
																<img src="front/images/product_9.png" alt="">
															</div>
															<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"></div>
															<div class="favorite favorite_left"></div>
															<div class="product_info">
																<h6 class="product_name"><a href="{{route('description')}}"></a>Woolrich, mix of classic and contemporary coats with a focus on warmth.</h6>
																<div class="product_price">$410.00</div>
															</div>
														</div>
														<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
													</div>
					
													<!-- Product 10 -->
					
													<div class="product-item men">
														<div class="product product_filter">
															<div class="product_image">
																<img src="front/images/product_10.png" alt="">
															</div>
															<div class="favorite"></div>
															<div class="product_info">
																<h6 class="product_name"><a href="{{route('description')}}">Pryma Headphones, Rose Gold & Grey</a></h6>
																<div class="product_price">$180.00</div>
															</div>
														</div>
														<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
													</div>										
										</div>
											  <div id="men">
												<!-- Product 11 -->
					
												<div class="product-item women men">
													<div class="product product_filter">
														<div class="product_image">
															<img src="front/images/product_5.png" alt="">
														</div>
														<div class="favorite"></div>
														<div class="product_info">
															<h6 class="product_name"><a href="{{route('description')}}">Madewell, Cozy and stylish sweater selections.</a></h6>
															<div class="product_price">$180.00</div>
														</div>
													</div>
													<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
												</div>
					
												<!-- Product 12 -->
												<div class="product-item men" >
													<div class="product discount product_filter">
														<div class="product_image">
															<img src="front/images/product_1.png" alt="">
														</div>
														<div class="favorite favorite_left"></div>
														<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"></div>
														<div class="product_info">
															<h6 class="product_name"><a href="{{route('description')}}">Hollister, casual and laid-back hoodie</a></h6>
															<div class="product_price">$520.00</div>
														</div>
													</div>
													<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
												</div>
												
											<div class="product-item accessories">
												<div class="product discount product_filter">
													<div class="product_image">
														<img src="front/images/product_6.png" alt="">
													</div>
													<div class="favorite favorite_left"></div>
													<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"></div>
													<div class="product_info">
														<h6 class="product_name"><a href="{{route('description')}}">Tom Ford, bold and elegant sunglasses designs.</a></h6>
														<div class="product_price">$520.00</div>
													</div>
												</div>
												<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
											</div>
											<div class="product-item men" >
												<div class="product discount product_filter">
													<div class="product_image">
														<img src="front/images/product_1.png" alt="">
													</div>
													<div class="favorite favorite_left"></div>
													<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"></div>
													<div class="product_info">
														<h6 class="product_name"><a href="">Hollister, casual and laid-back hoodie</a></h6>
														<div class="product_price">$520.00</div>
													</div>
												</div>
												<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
											</div>
											  </div>
									</div>
	
									<!-- Product Sorting -->
	
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	
	
	</div>

	<script src="{{asset('front/js/jquery-3.2.1.min.js')}}"></script>

	<script src="{{ asset('front/plugins/Isotope/isotope.pkgd.min.js')}}"></script>

	<script src="{{ asset('front/js/categories_custom.js')}}"></script>

@endsection
					
	
	
