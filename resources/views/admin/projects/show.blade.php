@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-10">
            <h2 class="title pb-5">{{$project->name}}</h2>    
            <p>
                {{$project->description}}
            </p>
            <a href="{$project->link}}">{{$project->link}}</a>
        </div>        
            <div class="col-2">
                @auth
                    <a href="{{route('admin.projects.update',$project)}}" class="px-2">Update</a>
                @endif
            <a href="{{route('admin.projects.index')}}">Go Back</a>
            </div>
        
    </div>
</div>
    
@endsection