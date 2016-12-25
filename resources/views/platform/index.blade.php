@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Platform Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("platform")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New platform</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>platformname</th>
            <th>platformslug</th>
            <th>showonmainpage</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($platforms as $platform) 
            <tr>
                <td>{!!$platform->platformname!!}</td>
                <td>{!!$platform->platformslug!!}</td>
                <td>{!!$platform->showonmainpage!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/platform/{!!$platform->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/platform/{!!$platform->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/platform/{!!$platform->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $platforms->render() !!}

</section>
@endsection