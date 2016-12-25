@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show games_link
    </h1>
    <br>
    <form method = 'get' action = '{!!url("games_link")!!}'>
        <button class = 'btn btn-primary'>games_link Index</button>
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
                    <b><i>gamepageurl : </i></b>
                </td>
                <td>{!!$games_link->gamepageurl!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>downloadurl : </i></b>
                </td>
                <td>{!!$games_link->downloadurl!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>downloadurl2 : </i></b>
                </td>
                <td>{!!$games_link->downloadurl2!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>downloadurl3 : </i></b>
                </td>
                <td>{!!$games_link->downloadurl3!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>downloadurl4 : </i></b>
                </td>
                <td>{!!$games_link->downloadurl4!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection