@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show devpub
    </h1>
    <br>
    <form method = 'get' action = '{!!url("devpub")!!}'>
        <button class = 'btn btn-primary'>devpub Index</button>
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
                    <b><i>devpuburl : </i></b>
                </td>
                <td>{!!$devpub->devpuburl!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>devpubname : </i></b>
                </td>
                <td>{!!$devpub->devpubname!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>devpubtype : </i></b>
                </td>
                <td>{!!$devpub->devpubtype!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>isgreatdevpub : </i></b>
                </td>
                <td>{!!$devpub->isgreatdevpub!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>devpubdescription : </i></b>
                </td>
                <td>{!!$devpub->devpubdescription!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection