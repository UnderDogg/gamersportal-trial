@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create gamenews_source
    </h1>
    <form method = 'get' action = '{!!url("gamenews_source")!!}'>
        <button class = 'btn btn-danger'>gamenews_source Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("gamenews_source")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="gnsource_name">gnsource_name</label>
            <input id="gnsource_name" name = "gnsource_name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="gnsource_url">gnsource_url</label>
            <input id="gnsource_url" name = "gnsource_url" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection