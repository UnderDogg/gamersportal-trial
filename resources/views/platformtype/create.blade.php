@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create platformtype
    </h1>
    <form method = 'get' action = '{!!url("platformtype")!!}'>
        <button class = 'btn btn-danger'>platformtype Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("platformtype")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="platformtype">platformtype</label>
            <input id="platformtype" name = "platformtype" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection