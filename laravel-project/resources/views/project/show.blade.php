@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        Welcome to the SHOW page
    </h2>
    <div class="row justify-content-center">
        <div class="col">
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
           

        </div>
    </div>
</div>
@endsection
