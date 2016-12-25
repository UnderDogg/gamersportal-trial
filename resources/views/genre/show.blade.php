@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show genre
    </h1>
    <br>
    <form method = 'get' action = '{!!url("genre")!!}'>
        <button class = 'btn btn-primary'>genre Index</button>
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
                    <b><i>genre : </i></b>
                </td>
                <td>{!!$genre->genre!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>genreslug : </i></b>
                </td>
                <td>{!!$genre->genreslug!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>is_gamespotgenre : </i></b>
                </td>
                <td>{!!$genre->is_gamespotgenre!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection