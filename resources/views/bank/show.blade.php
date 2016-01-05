@extends('public_layout')

@section('content')

            <h4 class="text-uppercase">{{ $bank->name }}</h4>
            <hr>
            <div class="row">
                <div class="col-md-2 col-md-offset-1">
                    Code:
                </div>
                <div class="col-md-9">
                    <p class="text-uppercase"> <strong>{{ $bank->code }}</strong></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 col-md-offset-1">
                    Country:
                </div>
                <div class="col-md-9">
                    <p class="text-capitalize">{{ $country->name }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 col-md-offset-1">
                    City:
                </div>
                <div class="col-md-9">
                    <p class="text-capitalize">{{ ucwords(strtolower($bank->city)) }}</p>
                </div>
            </div>

            <nav>
                <ul class="pager">
                    <li class="previous"><a href="{{ url()->previous() }}"><span aria-hidden="true">&larr;</span> {{ $country->name }} Banks</a></li>                                      
                </ul>
            </nav>

@endsection
