@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show platformtype
    </h1>
    <br>
    <form method = 'get' action = '{!!url("platformtype")!!}'>
        <button class = 'btn btn-primary'>platformtype Index</button>
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
                    <b><i>platformtype : </i></b>
                </td>
                <td>{!!$platformtype->platformtype!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection