@extends('layouts.master')
@section("title", $data["title"])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$data["catalogue"]["id"]}} - {{$data["catalogue"]["name"]}} </div>
                <div class="card-body">
                    <div class="row p-5">
                        <div class="col-md-12">
                           <ul> Id: {{$data["catalogue"]["id"]}}</ul>
                           <ul> Name: {{$data["catalogue"]["name"]}}</ul>
                           <ul> Description: {{$data["catalogue"]["description"]}}</ul>
                           <div class="text-center">
                                <form method="POST" action="{{ route('catalogue.delete') }}">
                                    @csrf
                                    <a class="btn btn-primary" href="{{url('/catalogue/show')}}">Back</a>
                                    <input type='hidden' name='id' value='{{$data["catalogue"]["id"]}}' />
                                    <button type="submit" class="btn btn-primary">Delete</button>

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
