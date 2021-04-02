<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct ()
    {
        # code...
        $this->middleware('auth')->except('index','show');

    }


    public function index()
    {
        $projects = Project::get();
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('projects.show', [
            'ProjectItem' => $project
        ]);
    }

    public function create()
    {
        return view('projects.create',[
            'projectEdit' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request)
    {


        Project::create([
            'title' => request('title'),
            'description' => request('description'),
            'slag' => request('slag')

        ]);

        return redirect()->route('project.index')->with('status', 'El Proyecto fue creado con exito');
    }

    public function edit(Project $project)
    {
        return view('projects.edit',[
            'projectEdit' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {

        # code.
        $project ->update( $request->validated());

        return redirect()->route('project.show', $project)->with('status', 'El Proyecto se ha actualizado con éxito');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('project.index', $project)->with('status', 'El Proyecto se ha eliminado con éxito');
    }

}
