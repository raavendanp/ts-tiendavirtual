@extends('layouts.master')
@section("title", $data["title"])
@section('content')
<!-- NAVIGATION -->
<nav id="navigation">
	<!-- container -->
	<div class="container">
		<!-- responsive-nav -->
		<div id="responsive-nav">
			<!-- NAV -->
			<ul class="main-nav nav navbar-nav">
                <li><a href="{{url('/index')}}">Home</a></li>
				<li><a href="{{url('/product/create')}}">New Product</a></li>
				<li class="active"><a href="{{url('/product/show')}}">See Products</a></li>
				<li><a href="{{url('/contact')}}">Contact</a></li>
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
				<ul class="breadcrumb-tree">
					<li><a href="#">Home</a></li>
					<li><a href="#">All Categories</a></li>
					<li><a href="#">Accessories</a></li>
					<li><a href="#">Headphones</a></li>
					<li class="active">Product name goes here</li>
				</ul>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- container -->
<div class="container">
    <!-- row -->
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Products Ordered By Id</div>
                        <div class="card-body">
                            <div class="row p-5">
                                <div class="col-md-12">
                                    <ul id="errors">
                                        @foreach($data["products"] as $product)
                                                @if(intval($product->getId()) == intval($data["products"][0]->getId())||
                                                    intval($product->getId()) == intval($data["products"][1]->getId()))
                                                <li><a  href = "{{url('/product/showDetails/'. $product->getId() )}}"><b>{{ $product->getId() }}</b> - {{ $product->getName() }} ( {{$product->getDescription()}} )</a></li>
                                                @else
                                                <li><a  href = "{{url('/product/showDetails/'. $product->getId() )}}">{{ $product->getId() }} - {{ $product->getName() }} ( {{$product->getDescription()}} )</a></li>
                                                @endif
                                        @endforeach
                                    </ul>
                                    <br><br><br>
                                    <div class="text-center">
                        
                                        <a class="red-btn" href="{{url('/index')}}">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
</div>
<!-- /container -->
@endsection
