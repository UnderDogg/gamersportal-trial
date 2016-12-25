@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show sery
    </h1>
    <br>
    <form method = 'get' action = '{!!url("sery")!!}'>
        <button class = 'btn btn-primary'>sery Index</button>
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
                    <b><i>serys_name : </i></b>
                </td>
                <td>{!!$sery->serys_name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>serys_slug : </i></b>
                </td>
                <td>{!!$sery->serys_slug!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>serys_url : </i></b>
                </td>
                <td>{!!$sery->serys_url!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection