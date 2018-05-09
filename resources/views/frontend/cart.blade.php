<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="{{asset('frontend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">      
		<link href="{{asset('frontend/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
		
		<link href="{{asset('frontend/themes/css/bootstrappage.css')}}" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="{{asset('frontend/themes/css/flexslider.css')}}" rel="stylesheet"/>
		<link href="{{asset('frontend/themes/css/main.css')}}" rel="stylesheet"/>

		<!-- scripts -->
		<script src="{{asset('frontend/themes/js/jquery-1.7.2.min.js')}}"></script>
		<script src="{{asset('frontend/bootstrap/js/bootstrap.min.js')}}"></script>				
		<script src="{{asset('frontend/themes/js/superfish.js')}}"></script>	
		<script src="{{asset('frontend/themes/js/jquery.scrolltotop.js')}}"></script>
		<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="themes/js/respond.min.js"></script>
		<![endif]-->
		<style>
			.badge{
				background-color: #e14000;
			}
		</style>
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#">My Account</a></li>
							<li><a href="cart.html">Your Cart &nbsp;<span class="badge">{{Cart::count()}}</span></a></li>
							<li><a href="checkout.html">Checkout</a></li>					
							<li><a href="register.html">Login</a></li>			
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="{{asset('frontend/themes/images/logo.png')}}" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products.html">Woman</a>					
								<ul>
									<li><a href="./products.html">Lacinia nibh</a></li>									
									<li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>									
								</ul>
							</li>															
							<li><a href="./products.html">Man</a></li>			
							<li><a href="./products.html">Sport</a>
								<ul>									
									<li><a href="./products.html">Gifts and Tech</a></li>
									<li><a href="./products.html">Ties and Hats</a></li>
									<li><a href="./products.html">Cold Weather</a></li>
								</ul>
							</li>							
							<li><a href="./products.html">Hangbag</a></li>
							<li><a href="./products.html">Best Seller</a></li>
							<li><a href="./products.html">Top Seller</a></li>
						</ul>
					</nav>
				</div>
			</section>				
			<section class="header_text sub">
			<img class="pageBanner" src="{{asset('img/slider/feature2.jpg')}}" alt="New products" >
				<h4><span>Shopping Cart</span></h4>
				@if(session()->has('success_message'))
					<div class="alert alert-success">
						{{session()->get('success_message')}}
						
					</div>
						
				@endif
				@if (count($errors)>0)
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
								<li>{{$error}}</li>
							@endforeach
						</ul>
					</div>
				@endif

				@if(Cart::count()>0)
					<h2>{{Cart::count()}} item(s) in shopping cart</h2>
				
			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Remove</th>
									<th>Image</th>
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Unit Price</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>

								@foreach(Cart::content() as $item)
								
								<tr>
									<td>
										<form action="{{route('cart.destroy',$item->rowId)}}" method="POST">
											@csrf
											{{method_field('DELETE')}}

											<button class="btn btn-inverse" type="submit" id="checkout">remove</button>
											

										
										</form>
									</td>
									<td><a href="{{route('shop.show',$item->options->slug)}}"><img alt="" src="{{asset('img/products/'.$item->options->slug.'.jpg')}}"/></a></td>
									<td><a href="{{route('shop.show',$item->options->slug)}}">{{$item->name}}</a></td>
									

									<td><input type="text" placeholder="1" class="input-mini"></td>
									<td>{{'৳'.$item->price}}</td>
									<td>{{'৳'.$item->price}}</td>
								</tr>
								@endforeach			  
								
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><strong>{{'৳'.Cart::total()}}</strong></td>
								</tr>		  
							</tbody>
						</table>
						<h4>What would you like to do next?</h4>
						<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
							Use Coupon Code
						</label>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							Estimate Shipping &amp; Taxes
						</label>
						<hr>
						<p class="cart-total right">
							<strong>Sub-Total</strong>:	$100.00<br>
							<strong>Eco Tax (-2.00)</strong>: $2.00<br>
							<strong>VAT (17.5%)</strong>: $17.50<br>
							<strong>Total</strong>: $119.50<br>
						</p>
						<hr/>
						

						<p class="buttons center">				
							<button class="btn" type="button">Update</button>
							<button class="btn" type="button">Continue</button>
							<button class="btn btn-inverse" type="submit" id="checkout">Checkout</button>
						</p>					
					</div>
					@else
					<h1>no item in cart</h1>
					<hr/>
					<p class="buttons center">				
						<button class="btn btn-inverse" type="button">Continue Shopping</button>
						
					</p>	
					@endif

					<div class="span3 col">
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">SUB CATEGORIES</li>
								<li><a href="products.html">Nullam semper elementum</a></li>
								<li class="active"><a href="products.html">Phasellus ultricies</a></li>
								<li><a href="products.html">Donec laoreet dui</a></li>
								<li><a href="products.html">Nullam semper elementum</a></li>
								<li><a href="products.html">Phasellus ultricies</a></li>
								<li><a href="products.html">Donec laoreet dui</a></li>
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">MANUFACTURES</li>
								<li><a href="products.html">Adidas</a></li>
								<li><a href="products.html">Nike</a></li>
								<li><a href="products.html">Dunlop</a></li>
								<li><a href="products.html">Yamaha</a></li>
							</ul>
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									
									@foreach($products as $product)
									<div class="item {{ $loop->index == 0 ? 'active' : '' }}">
										<ul class="thumbnails listing-products">

											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<a href="product_detail.html"><img alt="" src="{{asset('img/products/'.$product->slug.'.jpg')}}"></a><br/>
													<a href="product_detail.html" class="title">{{$product->name}}</a><br/>
													<a href="#" class="category">{{$product->detail}}</a>
													<p class="price">{{$product->price}}</p>
												</div>
											</li>
										</ul>
									</div>
									@endforeach
									
								</div>
							</div>
						</div>						
					</div>
				</div>
			</section>			
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.html">Homepage</a></li>  
							<li><a href="./about.html">About Us</a></li>
							<li><a href="./contact.html">Contac Us</a></li>
							<li><a href="./cart.html">Your Cart</a></li>
							<li><a href="./register.html">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="{{asset('frontend/themes/js/common.js')}}"></script>
		<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>
				
    </body>
</html>