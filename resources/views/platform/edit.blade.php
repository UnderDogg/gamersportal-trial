@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit platform
    </h1>
    <form method = 'get' action = '{!!url("platform")!!}'>
        <button class = 'btn btn-danger'>platform Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("platform")!!}/{!!$platform->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="platformname">platformname</label>
            <input id="platformname" name = "platformname" type="text" class="form-control" value="{!!$platform->
            platformname!!}"> 
        </div>
        <div class="form-group">
            <label for="platformslug">platformslug</label>
            <input id="platformslug" name = "platformslug" type="text" class="form-control" value="{!!$platform->
            platformslug!!}"> 
        </div>
        <div class="form-group">
            <label for="showonmainpage">showonmainpage</label>
            <input id="showonmainpage" name = "showonmainpage" type="text" class="form-control" value="{!!$platform->
            showonmainpage!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection