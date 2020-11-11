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
                <li><a href="{{url('/product/show/last/all')}}">Products</a></li>
                <li class="active"><a href="{{url('/contact')}}">Contact</a></li>
                <li><a href= "{{ url('/catalogue/showCatalogues')}}" >Catalogues</a></li>
                <li><a href="{{url('/clothes/show')}}">Clothes</a></li>
			</ul>
			<!-- /NAV -->
		</div>
		<!-- /responsive-nav -->
	</div>
	<!-- /container -->
</nav>
<!-- /NAVIGATION -->


<div class="container" style = "margin-top: 30px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">Group Members</h3>
                </div>
                    <div class="col-md-12" style = "margin-top: 39px">
                        <ul>Andres Almanzar Restrepo</ul>
                        <ul>aalmanzarr@eafit.edu.co</ul>
                        <br>
                        <ul>Ricardo Avendaño Peña</ul>
                        <ul>raavendanp@eafit.edu.co</ul>
                        <br>
                        <ul>Mateo Montes Loaiza</ul>
                        <ul>mmontesl1@eafit.edu.co</ul>
                    
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection
