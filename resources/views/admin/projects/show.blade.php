@extends('layouts.app')

@section('title','Project')

@section('content')

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="title pb-1">My Project:</h2>
        <div class="d-flex justify-content-between align-items-center gap-3">
            @auth
                <a href="{{route('admin.projects.edit', $project)}}" class="px-2 link-secondary">Update</a>
                <form action="{{ route('admin.projects.destroy',$project) }}" method="POST">                    
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-link link-danger">Delete</button>                            
                </form>
            @endif
            <a href="{{route('admin.projects.index')}}" class="link-secondary">Go Back</a>
        </div>
    </div>
</div>
<div class="container">
    <h3 class="pb-3">{{$project->name}}</h3>    
    <p>
        {{$project->description}}
    </p>
    <a href="{$project->link}}" class="link-secondary">{{$project->link}}</a>
    <p class="pt-3">Type: {{$project->type ? $project->type->name : 'Nessuna categoria'}}</p>
</div>   

    
@endsection