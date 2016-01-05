@extends('public_layout')

@section('content')

<h4 class="text-uppercase">{{ $country->name }}</h4>
<br>
<ul class="list-group">
    <li class="list-group-item">Alpha2: <strong>{{ $country->alpha2 }}</strong></li>
    <li class="list-group-item">Alpha3: <strong>{{ $country->alpha3 }}</strong></li>

</ul>

<nav>
    <ul class="pager">
        <li class="previous"><a href="{{ url()->previous() }}"><span aria-hidden="true">&larr;</span> Back</a></li>                  
        <li class="next"><a href="{{ route('listBanks', ['id' => $country->numeric_code])}}" class="btn">Show Banks</a></li>                  
    </ul>
</nav>

@endsection