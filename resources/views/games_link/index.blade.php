@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Games_link Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("games_link")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New games_link</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>gamepageurl</th>
            <th>downloadurl</th>
            <th>downloadurl2</th>
            <th>downloadurl3</th>
            <th>downloadurl4</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($games_links as $games_link) 
            <tr>
                <td>{!!$games_link->gamepageurl!!}</td>
                <td>{!!$games_link->downloadurl!!}</td>
                <td>{!!$games_link->downloadurl2!!}</td>
                <td>{!!$games_link->downloadurl3!!}</td>
                <td>{!!$games_link->downloadurl4!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/games_link/{!!$games_link->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/games_link/{!!$games_link->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/games_link/{!!$games_link->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $games_links->render() !!}

</section>
@endsection