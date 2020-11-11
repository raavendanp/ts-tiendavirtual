@extends('layouts.master')
@section("title", 'api')
@section('content')
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li><a href="{{url('/product/show/last/all')}}">Products</a></li>
                <li><a href="{{url('/contact')}}">Contact</a></li>
                <li><a href= "{{ url('/catalogue/showCatalogues')}}" >Catalogues</a></li>
                <li class="active"><a href="{{url('/clothes/show')}}">Clothes</a></li>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clothes From Ally Company</div>
                <div class="card-body">
                    <div class="row p-5">
                        <div class="col-md-12">
                            <ul id="errors">
                                @foreach($japi["data"] as $clothe)
                            <ul>{{$clothe["id"]}} . {{$clothe["category"]}} - Gender: {{$clothe["gender"]}}</ul>
                                 @endforeach
                            </ul>
                            <br><br><br>
                            <div class="text-center">

                                <a class="btn btn-primary" href="{{url('http://helize.tk/public/')}}">Store</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
