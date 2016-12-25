@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show platform
    </h1>
    <br>
    <form method = 'get' action = '{!!url("platform")!!}'>
        <button class = 'btn btn-primary'>platform Index</button>
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
                    <b><i>platformname : </i></b>
                </td>
                <td>{!!$platform->platformname!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>platformslug : </i></b>
                </td>
                <td>{!!$platform->platformslug!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>showonmainpage : </i></b>
                </td>
                <td>{!!$platform->showonmainpage!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection