@extends('layouts.app')

@section('content')
<div class="container ">

    <h2 class="fs-4 text-secondary my-4">
        Welcome to the SHOW page
    </h2>

    <div class="row justify-content-center">
        <div class="col">

            <div class="my-3 container-img">
                <img src="{{asset('storage/' . $project -> main_picture)}}" 
                alt=""
                width="200px">
            </div>

            <div class="my-3">
                <strong>project name:</strong> {{$project -> name}}
            </div>
           
            <div class="my-3">
                <strong>programming languages used:</strong> {{$project -> programming_language}}
            </div>

            <div class="my-3">
                <strong>description:</strong> {{$project -> description}}
            </div>

            <div class="my-3">
                <strong>compatible devices:</strong> {{$project -> device}}
            </div>

            <div class="my-3">
                <strong>type:</strong> {{$project -> type -> name}}
            </div>

            
            <div class="my-3">
                <strong>technology:</strong> 
                @foreach ($project -> technologies as $technology)
                <span>
                {{$technology -> name}} {{$technology -> version}},
                </span>
                @endforeach
            </div>

            <div class="my-3">
                <a 
                class="btn btn-primary"
                href="{{ route('project.edit', $project -> id) }}">Edit project</a>
            </div>
        </div>
    </div>
</div>

<style>
    .container-img {
        border: black 1px solid;
        height: 300px;
        width: 300px;
        position:relative;
        margin: auto;
    }

    img {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%)    
    }

</style>

@endsection
