@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit genre
    </h1>
    <form method = 'get' action = '{!!url("genre")!!}'>
        <button class = 'btn btn-danger'>genre Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("genre")!!}/{!!$genre->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="genre">genre</label>
            <input id="genre" name = "genre" type="text" class="form-control" value="{!!$genre->
            genre!!}"> 
        </div>
        <div class="form-group">
            <label for="genreslug">genreslug</label>
            <input id="genreslug" name = "genreslug" type="text" class="form-control" value="{!!$genre->
            genreslug!!}"> 
        </div>
        <div class="form-group">
            <label for="is_gamespotgenre">is_gamespotgenre</label>
            <input id="is_gamespotgenre" name = "is_gamespotgenre" type="text" class="form-control" value="{!!$genre->
            is_gamespotgenre!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection