<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProjectController;

Route :: prefix ('v1') -> group(function() {

    Route::get("/projects", [ProjectController::class, "projectsIndex"]);

    Route::get("/projects/{id}", [ProjectController::class, "projectShow"] );
});


