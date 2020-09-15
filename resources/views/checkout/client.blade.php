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
				<!-- Client Information -->
				<div class="billing-details">
					<div class="section-title">
						<h3 class="title">Buyer Information</h3>
					</div>
					<form method="POST" id="form1" action="{{ route('checkout.client.save') }}">
						@csrf
						<div class="form-group">
							<input class="input" type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required>
						</div>
						<div class="form-group">
							<input class="input" type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required>
						</div>
						<div class="form-group">
							<input class="input" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
						</div>
						<div class="form-group">
							<input class="input" type="text" name="telephone" placeholder="Telephone" value="{{ old('telephone') }}">
						</div>
						<button style="margin-left:40%" type=submit class="primary-btn">Continue</button>
					</form>
					<div class="form-group">
						<div class="input-checkbox">
							<input type="checkbox" id="create-account">
						</div>
					</div>
				</div>
				<!-- /Client Information -->
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
				
			</div>
			<!-- /Order Details -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
@endsection