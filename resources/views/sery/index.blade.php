@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Sery Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("sery")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New sery</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>serys_name</th>
            <th>serys_slug</th>
            <th>serys_url</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($serys as $sery) 
            <tr>
                <td>{!!$sery->serys_name!!}</td>
                <td>{!!$sery->serys_slug!!}</td>
                <td>{!!$sery->serys_url!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/sery/{!!$sery->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/sery/{!!$sery->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/sery/{!!$sery->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $serys->render() !!}

</section>
@endsection