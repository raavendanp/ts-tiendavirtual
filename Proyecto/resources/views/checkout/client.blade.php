@extends('layouts.master')
@section("title", "Show Product")
@section('content')

        <!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Hot Deals</a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Laptops</a></li>
						<li><a href="#">Smartphones</a></li>
						<li><a href="#">Cameras</a></li>
						<li><a href="#">Accessories</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Buyer Information</h3>
							</div>
						<form method="POST" id = "form1"action="{{ route('checkout.client.save') }}">
							@csrf
							<div class="form-group">
								<input class="input" type="text" name="first_name" placeholder="First Name" value= "{{ old('first_name') }}" >
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last_name" placeholder="Last Name" value= "{{ old('last_name') }}">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email" value= "{{ old('email') }}">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="adress" placeholder="Address" value= "{{ old('adress') }}">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City" value= "{{ old('city') }}">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Country" value= "{{ old('country') }}">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip_code" placeholder="ZIP Code" value= "{{ old('zip_code') }}">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="telephone" placeholder="Telephone" value= "{{ old('telephone') }}">
							</div>
							<button style="margin-left:40%" type=submit class="primary-btn">Continue</button>	
						</form>
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="create-account">
								</div>
							</div>
						</div>
						<!-- /Billing Details -->

						<!-- Shiping Details 
						<div class="shiping-details">
							<div class="section-title">
								<h3 class="title">Shiping address</h3>
							</div>
							<div class="input-checkbox">
								<input type="checkbox" id="shiping-address">
								<label for="shiping-address">
									<span></span>
									Ship to a diffrent address?
								</label>
								<div class="caption">
									<form method="POST" action="{{ route('checkout.client.save') }}">
										@csrf
										<div class="form-group">
											<input class="input" type="text" name="first_name" placeholder="First Name" value= "{{ old('first_name') }}" >
										</div>
										<div class="form-group">
											<input class="input" type="text" name="last_name" placeholder="Last Name" value= "{{ old('last_name') }}">
										</div>
										<div class="form-group">
											<input class="input" type="email" name="email" placeholder="Email" value= "{{ old('email') }}">
										</div>
										<div class="form-group">
											<input class="input" type="text" name="adress" placeholder="Address" value= "{{ old('adress') }}">
										</div>
										<div class="form-group">
											<input class="input" type="text" name="city" placeholder="City" value= "{{ old('city') }}">
										</div>
										<div class="form-group">
											<input class="input" type="text" name="country" placeholder="Country" value= "{{ old('country') }}">
										</div>
										<div class="form-group">
											<input class="input" type="text" name="zip_code" placeholder="ZIP Code" value= "{{ old('zip_code') }}">
										</div>
										<div class="form-group">
											<input class="input" type="text" name="telephone" placeholder="Telephone" value= "{{ old('telephone') }}">
										</div>
										
									</form>
									
								</div>
							</div>
						</div>
						 /Shiping Details -->

						<!-- Order notes 
						<div class="order-notes">
							<textarea class="input" placeholder="Order Notes"></textarea>
						</div>
						/Order notes -->
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title form-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
								<div class="order-col">
									<div>1x Product Name Goes Here</div>
									<div>$980.00</div>
								</div>
								<div class="order-col">
									<div>2x Product Name Goes Here</div>
									<div>$980.00</div>
								</div>
							</div>
							<div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">$2940.00</strong></div>
							</div>
						</div>
						<!--<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Direct Bank Transfer
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Cheque Payment
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Paypal System
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div>-->
						
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
        <!-- /SECTION -->
@endsection