@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Gamelink Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("gamelink")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New gamelink</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>gamelink_url</th>
            <th>gamelink_title</th>
            <th>httpcode</th>
            <th>httpdefinition</th>
            <th>gamelink_type</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($gamelinks as $gamelink) 
            <tr>
                <td>{!!$gamelink->gamelink_url!!}</td>
                <td>{!!$gamelink->gamelink_title!!}</td>
                <td>{!!$gamelink->httpcode!!}</td>
                <td>{!!$gamelink->httpdefinition!!}</td>
                <td>{!!$gamelink->gamelink_type!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/gamelink/{!!$gamelink->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/gamelink/{!!$gamelink->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/gamelink/{!!$gamelink->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $gamelinks->render() !!}

</section>
@endsection