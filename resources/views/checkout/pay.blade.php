@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Paypal</div>
                <div class="text-center">

                    <a class="btn btn-primary" href="{{url('/paypal/pay')}}">Pay</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
