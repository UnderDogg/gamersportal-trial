@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit game
    </h1>
    <form method = 'get' action = '{!!url("game")!!}'>
        <button class = 'btn btn-danger'>game Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("game")!!}/{!!$game->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="id">id</label>
            <input id="id" name = "id" type="text" class="form-control" value="{!!$game->
            id!!}"> 
        </div>
        <div class="form-group">
            <label for="gamename">gamename</label>
            <input id="gamename" name = "gamename" type="text" class="form-control" value="{!!$game->
            gamename!!}"> 
        </div>
        <div class="form-group">
            <label for="slug">slug</label>
            <input id="slug" name = "slug" type="text" class="form-control" value="{!!$game->
            slug!!}"> 
        </div>
        <div class="form-group">
            <label for="isinteresting">isinteresting</label>
            <input id="isinteresting" name = "isinteresting" type="text" class="form-control" value="{!!$game->
            isinteresting!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection