@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit gamelink
    </h1>
    <form method = 'get' action = '{!!url("gamelink")!!}'>
        <button class = 'btn btn-danger'>gamelink Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("gamelink")!!}/{!!$gamelink->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="gamelink_url">gamelink_url</label>
            <input id="gamelink_url" name = "gamelink_url" type="text" class="form-control" value="{!!$gamelink->
            gamelink_url!!}"> 
        </div>
        <div class="form-group">
            <label for="gamelink_title">gamelink_title</label>
            <input id="gamelink_title" name = "gamelink_title" type="text" class="form-control" value="{!!$gamelink->
            gamelink_title!!}"> 
        </div>
        <div class="form-group">
            <label for="httpcode">httpcode</label>
            <input id="httpcode" name = "httpcode" type="text" class="form-control" value="{!!$gamelink->
            httpcode!!}"> 
        </div>
        <div class="form-group">
            <label for="httpdefinition">httpdefinition</label>
            <input id="httpdefinition" name = "httpdefinition" type="text" class="form-control" value="{!!$gamelink->
            httpdefinition!!}"> 
        </div>
        <div class="form-group">
            <label for="gamelink_type">gamelink_type</label>
            <input id="gamelink_type" name = "gamelink_type" type="text" class="form-control" value="{!!$gamelink->
            gamelink_type!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection