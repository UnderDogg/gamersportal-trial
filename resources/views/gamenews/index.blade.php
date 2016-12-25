@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Gamenews Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("gamenews")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New gamenews</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>id</th>
            <th>gamenews_title</th>
            <th>gamenews_intro</th>
            <th>gamenews_body</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($gamenews as $gamenews) 
            <tr>
                <td>{!!$gamenews->id!!}</td>
                <td>{!!$gamenews->gamenews_title!!}</td>
                <td>{!!$gamenews->gamenews_intro!!}</td>
                <td>{!!$gamenews->gamenews_body!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/gamenews/{!!$gamenews->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/gamenews/{!!$gamenews->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/gamenews/{!!$gamenews->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $gamenews->render() !!}

</section>
@endsection