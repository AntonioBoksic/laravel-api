@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        Welcome to the INDEX page
    </h2>

    <h3 class="fs-4 text-secondary my-4">
        Create a new project
        <a 
        class="btn btn primary bg-dark text-light"
        href=" {{ route('project.create') }} ">
        +
        </a>
    </h3>

    <div class="row justify-content-center">
        <div class="col">
            <ul>
                @foreach ($projects as $project)
                <li>
                    <a href=" {{ route('project.show', $project -> id) }} ">
                    {{$project -> id}} 
                    Project 
                    {{$project -> name}}  
                    </a>
                      
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
//