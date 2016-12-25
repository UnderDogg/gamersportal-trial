@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Gamenews_source Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("gamenews_source")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New gamenews_source</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>gnsource_name</th>
            <th>gnsource_url</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($gamenews_sources as $gamenews_source) 
            <tr>
                <td>{!!$gamenews_source->gnsource_name!!}</td>
                <td>{!!$gamenews_source->gnsource_url!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/gamenews_source/{!!$gamenews_source->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/gamenews_source/{!!$gamenews_source->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/gamenews_source/{!!$gamenews_source->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $gamenews_sources->render() !!}

</section>
@endsection