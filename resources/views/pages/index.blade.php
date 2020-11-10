@extends('layouts.master')
@section('content')
<div class="p-5 md:p-16 lg:p-20">
    @if (session('status'))
    <h3 class="text-xl md:text-2xl">
        {{session('status')}}
    </h3>
    @endif
</div>
<!-- NAVIGATION -->
<nav id="navigation">
	<!-- container -->
	<div class="container">
		<!-- responsive-nav -->
		<div id="responsive-nav">
			<!-- NAV -->
			<ul class="main-nav nav navbar-nav">
                <li class="active"><a href="{{url('/index')}}">Home</a></li>
                <li><a href="{{url('/product/show/last/all')}}">Products</a></li>
                <li><a href="{{url('/contact')}}">Contact</a></li>
                <li><a href= "{{ url('/catalogue/showCatalogues')}}" >Catalogues</a></li>


            </ul>
			<!-- /NAV -->
		</div>
		<!-- /responsive-nav -->
	</div>
	<!-- /container -->
</nav>
<!-- /NAVIGATION -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>
                <div class="card-body">

                    <li><a href= "{{ url('/product/create')}}" >New Product </a></li>
                    <li><a href= "{{ url('/product/show/last')}}" >Show Products </a></li>
                    <li><a href= "{{ url('/contact')}}" >Contact Us</a></li>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
