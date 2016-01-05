@extends('public_layout')


@section('content')

<h4 class="text-uppercase">{{ $country->name }} BANKS</h4>
<hr>
@if (count($banks) > 0)             
<div class="list-group">                       
    @foreach ($banks as $bank)
    <button type="button" class="list-group-item bank-list" data-id="{{ $bank->id }}" data-country="{{ $bank->country_id }}">
        <div class="row">
            <div class="col-md-9">
                <h5 text-capitalize>{{ $bank->name }}</h5>
            </div>                        
            <div class="col-md-3">
                <strong class="text-right text-uppercase">{{ $bank->code }}</strong>
            </div>

        </div>
    </button>                        
    @endforeach
</div>
<div class="text-center">{!! $banks->links() !!}</div>
@else
Sorry.. I don't have any banks!
@endif

<nav>
    <ul class="pager">
        <li class="previous"><a href="{{ url('/countries/') }}"><span aria-hidden="true">&larr;</span> Countries</a></li>                                      
    </ul>
</nav>

@endsection

@section('scripts')
<script src="{{ asset('/js/bankListAction.js') }}"></script>
@endsection