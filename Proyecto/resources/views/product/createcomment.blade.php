@extends('layouts.master')
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
				<li class="active"><a href="{{url('/product/create')}}">New Product</a></li>
				<li><a href="{{url('/product/show')}}">See Products</a></li>
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
                    @include('util.message')
                    <div class="card">
                        <div class="card-header">Create Comment</div>
                        <div class="card-body">
                        @if($errors->any())
                        <ul id="errors">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif
                        <form class ="text-center" method="POST" action="{{ route('comment.save') }}">
                            @csrf
                            <input class = "form" type="text" placeholder="Name" name="name" value= "{{ old('name') }}" />
                            <input class = "form" type="email" placeholder="email" name="email" value="{{ old('email') }}" />
                            <input class = "form" type="text" placeholder="product_id" name="product_id" value="{{ old('product_id') }}" />
                            <input class = "form" type="text" placeholder="rating" name="rating" value="{{ old('rating') }}" />
                            <input class = "description" type="text"  style="heigth : 1000px" placeholder="Description" name="description" value="{{ old('description') }}" />
                            
                            <br><br>
                            <br />
                        
        
                            <div class="text-center">
                            <a class="red-btn" href="{{url('/index')}}">Back</a>
                            <button type="submit">Create</button>
                            </div>
                            
                        </form>
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

