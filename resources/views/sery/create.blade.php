@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create sery
    </h1>
    <form method = 'get' action = '{!!url("sery")!!}'>
        <button class = 'btn btn-danger'>sery Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("sery")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="serys_name">serys_name</label>
            <input id="serys_name" name = "serys_name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="serys_slug">serys_slug</label>
            <input id="serys_slug" name = "serys_slug" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="serys_url">serys_url</label>
            <input id="serys_url" name = "serys_url" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection