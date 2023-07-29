<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//questo lo aggiungiamo noi chiaramente
use App\Models\Project;
use App\Models\Type;

use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function index() {
        $projects = Project :: all();

        return view("project.index", compact("projects"));
    }

    

    public function show($id) {
    
        $project = Project :: findOrFail($id);

        return view("project.show", compact("project"));
    }

    public function create() {

        $types = Type :: all();
    
        return view("project.create", compact('types'));
    }

    public function store(Request $request) {

        $data = $request->all();

        $img_path = Storage :: put('uploads', $data['main_picture']);
        $data['main_picture'] = $img_path;

        $project = Project :: create($data);

        return redirect() -> route('project.show', $project -> id);
    }

    public function edit($id) {

        $types = Type :: all();

        $project = Project :: findOrFail($id);

       

        return view('project.edit', compact('types','project'));

    }

   
}
