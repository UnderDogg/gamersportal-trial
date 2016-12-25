@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show gamelink
    </h1>
    <br>
    <form method = 'get' action = '{!!url("gamelink")!!}'>
        <button class = 'btn btn-primary'>gamelink Index</button>
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
                    <b><i>gamelink_url : </i></b>
                </td>
                <td>{!!$gamelink->gamelink_url!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>gamelink_title : </i></b>
                </td>
                <td>{!!$gamelink->gamelink_title!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>httpcode : </i></b>
                </td>
                <td>{!!$gamelink->httpcode!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>httpdefinition : </i></b>
                </td>
                <td>{!!$gamelink->httpdefinition!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>gamelink_type : </i></b>
                </td>
                <td>{!!$gamelink->gamelink_type!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection