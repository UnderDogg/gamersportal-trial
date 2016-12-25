@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Devpub Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("devpub")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New devpub</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>devpuburl</th>
            <th>devpubname</th>
            <th>devpubtype</th>
            <th>isgreatdevpub</th>
            <th>devpubdescription</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($devpubs as $devpub) 
            <tr>
                <td>{!!$devpub->devpuburl!!}</td>
                <td>{!!$devpub->devpubname!!}</td>
                <td>{!!$devpub->devpubtype!!}</td>
                <td>{!!$devpub->isgreatdevpub!!}</td>
                <td>{!!$devpub->devpubdescription!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/devpub/{!!$devpub->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/devpub/{!!$devpub->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/devpub/{!!$devpub->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $devpubs->render() !!}

</section>
@endsection