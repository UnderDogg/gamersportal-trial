@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show gamenews
    </h1>
    <br>
    <form method = 'get' action = '{!!url("gamenews")!!}'>
        <button class = 'btn btn-primary'>gamenews Index</button>
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
                <td>{!!$gamenews->id!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>gamenews_title : </i></b>
                </td>
                <td>{!!$gamenews->gamenews_title!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>gamenews_intro : </i></b>
                </td>
                <td>{!!$gamenews->gamenews_intro!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>gamenews_body : </i></b>
                </td>
                <td>{!!$gamenews->gamenews_body!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection