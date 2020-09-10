<?php

namespace App\Http\Controllers;

use App\Axios;
use Illuminate\Http\Request;

class AxiosController extends Controller
{
    public function store(Request $request) 
    {
        $project = new Axios();

        $project->name = $request->name;
        $project->description = $request->description;

        $project->save();            
    }
}
