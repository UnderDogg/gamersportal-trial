@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create devpub
    </h1>
    <form method = 'get' action = '{!!url("devpub")!!}'>
        <button class = 'btn btn-danger'>devpub Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("devpub")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="devpuburl">devpuburl</label>
            <input id="devpuburl" name = "devpuburl" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="devpubname">devpubname</label>
            <input id="devpubname" name = "devpubname" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="devpubtype">devpubtype</label>
            <input id="devpubtype" name = "devpubtype" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="isgreatdevpub">isgreatdevpub</label>
            <input id="isgreatdevpub" name = "isgreatdevpub" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="devpubdescription">devpubdescription</label>
            <input id="devpubdescription" name = "devpubdescription" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection