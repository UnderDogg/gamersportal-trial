@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show game
    </h1>
    <br>
    <form method = 'get' action = '{!!url("game")!!}'>
        <button class = 'btn btn-primary'>game Index</button>
    </form>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>id : </i></b>
                </td>
                <td>{!!$game->id!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>gamename : </i></b>
                </td>
                <td>{!!$game->gamename!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>slug : </i></b>
                </td>
                <td>{!!$game->slug!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>isinteresting : </i></b>
                </td>
                <td>{!!$game->isinteresting!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection