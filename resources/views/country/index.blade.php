@extends('public_layout')

@section('content')
<h4><small>Continents Filter:</small>                 
    <a href="{{ url('countries?filter=latam') }}"><span class="label label-primary continent-lbl">Latin America</span></a>
    <!--a href="#"><span class="label label-success continent-lbl">North America</span></a>
    <a href="#"><span class="label label-info continent-lbl">Europe</span></a>
    <a href="#"><span class="label label-danger continent-lbl">Asia</span></a-->
    <a href="{{ url('countries') }}"><span class="label label-default continent-lbl">All</span></a>
</h4>
<hr>
<h4 class="text-uppercase">{{ $isFiltering? request('filter') :'ALL' }} COUNTRIES</h4>            
@if (count($countries) > 0)             
<ul class="list-group">                       
    @foreach ($countries as $country)
    <li class="list-group-item">
        <div class="row">
            <div class="col-md-9">
                <h5 text-capitalize><a href="{{ url('countries', ['id' => $country->numeric_code])}}">{{ $country->name }}</a></h5>
            </div>
            <div class="col-md-3">
                <a href="{{ route('listBanks', ['id' => $country->numeric_code])}}" class="btn btn-default">Show Banks</a>                        
            </div>
        </div>
    </li>                        
    @endforeach
</ul>
<div class="text-center">{!! $countries->links() !!}</div>
@else
Sorry.. I don't have any countries!
@endif
@endsection