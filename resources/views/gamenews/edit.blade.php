@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit gamenews
    </h1>
    <form method = 'get' action = '{!!url("gamenews")!!}'>
        <button class = 'btn btn-danger'>gamenews Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("gamenews")!!}/{!!$gamenews->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="id">id</label>
            <input id="id" name = "id" type="text" class="form-control" value="{!!$gamenews->
            id!!}"> 
        </div>
        <div class="form-group">
            <label for="gamenews_title">gamenews_title</label>
            <input id="gamenews_title" name = "gamenews_title" type="text" class="form-control" value="{!!$gamenews->
            gamenews_title!!}"> 
        </div>
        <div class="form-group">
            <label for="gamenews_intro">gamenews_intro</label>
            <input id="gamenews_intro" name = "gamenews_intro" type="text" class="form-control" value="{!!$gamenews->
            gamenews_intro!!}"> 
        </div>
        <div class="form-group">
            <label for="gamenews_body">gamenews_body</label>
            <input id="gamenews_body" name = "gamenews_body" type="text" class="form-control" value="{!!$gamenews->
            gamenews_body!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection