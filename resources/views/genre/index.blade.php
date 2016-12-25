@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Genre Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("genre")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New genre</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>genre</th>
            <th>genreslug</th>
            <th>is_gamespotgenre</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($genres as $genre) 
            <tr>
                <td>{!!$genre->genre!!}</td>
                <td>{!!$genre->genreslug!!}</td>
                <td>{!!$genre->is_gamespotgenre!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/genre/{!!$genre->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/genre/{!!$genre->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/genre/{!!$genre->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $genres->render() !!}

</section>
@endsection