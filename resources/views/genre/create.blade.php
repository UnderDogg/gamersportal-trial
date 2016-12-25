@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create genre
    </h1>
    <form method = 'get' action = '{!!url("genre")!!}'>
        <button class = 'btn btn-danger'>genre Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("genre")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="genre">genre</label>
            <input id="genre" name = "genre" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="genreslug">genreslug</label>
            <input id="genreslug" name = "genreslug" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="is_gamespotgenre">is_gamespotgenre</label>
            <input id="is_gamespotgenre" name = "is_gamespotgenre" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection