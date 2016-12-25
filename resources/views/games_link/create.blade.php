@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create games_link
    </h1>
    <form method = 'get' action = '{!!url("games_link")!!}'>
        <button class = 'btn btn-danger'>games_link Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("games_link")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="gamepageurl">gamepageurl</label>
            <input id="gamepageurl" name = "gamepageurl" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="downloadurl">downloadurl</label>
            <input id="downloadurl" name = "downloadurl" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="downloadurl2">downloadurl2</label>
            <input id="downloadurl2" name = "downloadurl2" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="downloadurl3">downloadurl3</label>
            <input id="downloadurl3" name = "downloadurl3" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="downloadurl4">downloadurl4</label>
            <input id="downloadurl4" name = "downloadurl4" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection