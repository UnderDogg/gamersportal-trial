@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit platformtype
    </h1>
    <form method = 'get' action = '{!!url("platformtype")!!}'>
        <button class = 'btn btn-danger'>platformtype Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("platformtype")!!}/{!!$platformtype->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="platformtype">platformtype</label>
            <input id="platformtype" name = "platformtype" type="text" class="form-control" value="{!!$platformtype->
            platformtype!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection