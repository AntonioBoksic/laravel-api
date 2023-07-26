@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        Welcome to the CREATE page
    </h2>

    <div class="row text-center">
        <div class="col">

            <form 
            action=" {{ route('project.store') }} "
            method="POST">

            @csrf
            @method("POST")

            <label for="name">Name</label>
            <br>
            <input type="text" name="name">
            <br>

            <label for="programming_language">Programming_language</label>
            <br>
            <input type="text" name="programming_language">
            <br>

            <label for="description">Description</label>
            <br>
            <input type="text" name="description">
            <br>

            <label for="device">Device</label>
            <br>
            <input type="text" name="device">
            <br>

            <select name="type_id" id="type">
                @foreach ($types as $type)
                <option value="{{ $type -> id}}">
                    {{ $type -> name}}
                    
                </option>
                @endforeach
            </select>

            <input type="submit" value="Create" class="my-2">

            </form>
        </div>
    </div>
</div>
@endsection