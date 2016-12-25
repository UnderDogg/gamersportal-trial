@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit gamenews_source
    </h1>
    <form method = 'get' action = '{!!url("gamenews_source")!!}'>
        <button class = 'btn btn-danger'>gamenews_source Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("gamenews_source")!!}/{!!$gamenews_source->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="gnsource_name">gnsource_name</label>
            <input id="gnsource_name" name = "gnsource_name" type="text" class="form-control" value="{!!$gamenews_source->
            gnsource_name!!}"> 
        </div>
        <div class="form-group">
            <label for="gnsource_url">gnsource_url</label>
            <input id="gnsource_url" name = "gnsource_url" type="text" class="form-control" value="{!!$gamenews_source->
            gnsource_url!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection