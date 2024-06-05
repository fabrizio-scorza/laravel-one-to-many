@extends('layouts.app')

@section('title','Projects')

@section('content')
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center">
        <h2>My Projects</h2>
        <a class="btn btn-primary" href="{{route('admin.projects.create')}}"> Create new project</a>
    </div>
</div>
<div class="container">
    <table class="table table-success table-striped">
        <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Link</th>
            <th scope="col">Type</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                <td scope="row">{{$project->name}}</td>
                <td><a href="{{$project->link}}">{{$project->link}}</a></td>
                <td>{{$project->type ? $project->type->name : 'Nessuna categoria'}}</td>
                @auth
                    <td><a href="{{route('admin.projects.show',$project)}}">Details</a></td>
                    <td><a href="">Delete</a></td>
                @endif
                </tr>   
            @endforeach        
        </tbody>
    </table>    
</div>

    
@endsection