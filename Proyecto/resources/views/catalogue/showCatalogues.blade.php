@extends('layouts.master')
@section("title", $data["title"])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Catalogues</div>
                <div class="card-body">
                    <div class="row p-5">
                        <div class="col-md-12">
                            <ul id="errors">
                                @foreach($data["catalogues"] as $catalogue)
                                        @if(intval($catalogue->getId()) == intval($data["catalogues"][0]->getId())||
                                            intval($catalogue->getId()) == intval($data["catalogues"][1]->getId()))
                                        <li><a  href = "{{url('/catalogue/showDetails/'. $catalogue->getId() )}}"><b>{{ $catalogue->getId() }}</b> - {{ $catalogue->getName() }} ( {{$catalogue->getDescription()}} )</a></li>
                                        @else
                                        <li><a  href = "{{url('/catalogue/showDetails/'. $catalogue->getId() )}}">{{ $catalogue->getId() }} - {{ $catalogue->getName() }} ( {{$catalogue->getDescription()}} )</a></li>
                                        @endif
                                 @endforeach
                            </ul>
                            <br><br><br>
                            <div class="text-center">

                                <a class="btn btn-primary" href="{{url('/index')}}">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
