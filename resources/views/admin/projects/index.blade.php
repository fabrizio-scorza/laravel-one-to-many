@extends('layouts.app')

@section('title','Projects')

@section('content')
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center">
        <h2>My Projects</h2>
        <a class="btn btn-success" href="{{route('admin.projects.create')}}"> Create new project</a>
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
                    <td scope="row" class="py-3">{{$project->name}}</td>
                    <td>
                        <a href="{{$project->link}}"  class="btn btn-link link-secondary text-start">{{$project->link}}</a>
                    </td>
                    <td class="py-3">{{$project->type ? $project->type->name : 'Nessuna categoria'}}</td>                
                    <td>
                        <a class="btn btn-link link-secondary" href="{{route('admin.projects.show',$project)}}">Details</a>
                    </td>
                    <td>
                        @auth
                            <form action="{{ route('admin.projects.destroy',$project) }}" method="POST">
                    
                                @csrf
                                @method('DELETE')
            
                                <button class="btn btn-link link-danger">Delete</button>
                            
                            </form>
                        @endif
                    </td>                
                </tr>   
            @endforeach        
        </tbody>
    </table>    
</div>

    
@endsection