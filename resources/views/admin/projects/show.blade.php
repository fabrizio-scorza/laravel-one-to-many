@extends('layouts.app')

@section('title','Project')

@section('content')

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="title pb-1">My Project:</h2>
        <div>
            @auth
                <a href="{{route('admin.projects.edit', $project)}}" class="px-2">Update</a>
            @endif
            <a href="{{route('admin.projects.index')}}">Go Back</a>
        </div>
    </div>
</div>
<div class="container">
    <h3 class="pb-3">{{$project->name}}</h3>    
    <p>
        {{$project->description}}
    </p>
    <a href="{$project->link}}">{{$project->link}}</a>
    <p class="pt-3">{{$project->type ? $project->type->name : 'Nessuna categoria'}}</p>
</div>   

    
@endsection