@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        Welcome to the EDIT page
    </h2>

    <div class="row text-center">
        <div class="col">

            <form 
            action=" {{ route('project.update', $project -> id) }} "
            method="POST"
            enctype="multipart/form-data"
            >

            @csrf
            @method("PUT")

            

                <label for="name">Name</label> <br>
                <input type="text" name="name" value=" {{ $project -> name }} "> <br>

                <label for="programming_language">Programming language</label> <br>
                <input type="text" name="programming_language" value=" {{ $project -> programming_language }} "> <br>

                <label for="description">Description</label> <br>
                <input type="text" name="description" value=" {{ $project -> description }} "> <br>

                <label for="device">Device</label> <br>
                <input type="text" name="device" value=" {{ $project -> device }} "> <br>

                <select class="my-2" name="type_id" id="type">
                    @foreach ($types as $type)
                    <option value="{{ $type -> id}}"
                        @selected( $project -> type -> id === $type -> id )
                    >
                    
                        {{ $type -> name }}
                        
                    </option>
                    @endforeach
                </select>

                <br>
                <input class=" my-2 btn btn-primary" type="submit" value="Update">

            </form>
        </div>
    </div>
</div>
@endsection