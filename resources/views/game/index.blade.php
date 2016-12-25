@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Game Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("game")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New game</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>id</th>
            <th>gamename</th>
            <th>slug</th>
            <th>isinteresting</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($games as $game) 
            <tr>
                <td>{!!$game->id!!}</td>
                <td>{!!$game->gamename!!}</td>
                <td>{!!$game->slug!!}</td>
                <td>{!!$game->isinteresting!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/game/{!!$game->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/game/{!!$game->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/game/{!!$game->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $games->render() !!}

</section>
@endsection