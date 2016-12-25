@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create platform
    </h1>
    <form method = 'get' action = '{!!url("platform")!!}'>
        <button class = 'btn btn-danger'>platform Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("platform")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="platformname">platformname</label>
            <input id="platformname" name = "platformname" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="platformslug">platformslug</label>
            <input id="platformslug" name = "platformslug" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="showonmainpage">showonmainpage</label>
            <input id="showonmainpage" name = "showonmainpage" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection