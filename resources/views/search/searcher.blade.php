@section('searcher')
<div class="row swift-searcher">
    <div class="col-md-10 col-md-offset-1">
        <form method="GET" action="{{ action('SearchController@search') }}" class="form-horizontal">
        <div class="input-group " id="searcher-input">
            <input type="text" class="form-control input-lg" name="keywords" placeholder="Search for ...">
            <span class="input-group-btn">
                <button class="btn btn-success btn-lg" type="submit">Go!</button>
            </span>
        </div>
        </form>
    </div>
</div>
@endsection