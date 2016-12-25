@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show gamenews_source
    </h1>
    <br>
    <form method = 'get' action = '{!!url("gamenews_source")!!}'>
        <button class = 'btn btn-primary'>gamenews_source Index</button>
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
                    <b><i>gnsource_name : </i></b>
                </td>
                <td>{!!$gamenews_source->gnsource_name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>gnsource_url : </i></b>
                </td>
                <td>{!!$gamenews_source->gnsource_url!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection