@extends('layouts.master')
@section("title", $data["title"])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$data["product"]["id"]}} - {{$data["product"]["name"]}} </div>
                <div class="card-body">
                    <div class="row p-5">
                        <div class="col-md-12">
                           <ul> Id: {{$data["product"]["id"]}}</ul>
                           <ul> Name: {{$data["product"]["name"]}}</ul>
                           <ul> Price: {{$data["product"]["price"]}}</ul>
                           <ul> Description: {{$data["product"]["description"]}}</ul>
                           <div class="text-center">
                                <form method="POST" action="{{ route('product.delete') }}">
                                    @csrf
                                    <a class="red-btn" href="{{url('/product/show')}}">Back</a>
                                    <input type='hidden' name='id' value='{{$data["product"]["id"]}}' />
                                    <button type="submit" >Delete</button>
                                    
                                </form>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
