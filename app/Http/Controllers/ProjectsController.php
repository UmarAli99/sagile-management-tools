<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', ['projects' => $projects]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
        ]);

        Project::create([
            'title' => request('title'),
            'description' => request('description'),
            'startdate' => request('startdate'),
            'enddate' => request('enddate'),
        ]);

        return redirect('/projects');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', ['project' => $project]);
    }

    public function update(Project $project)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
        ]);

        $project->update([
            'title' => request('title'),
            'description' => request('description'),
            'startdate' => request('startdate'),
            'enddate' => request('enddate'),
        ]);

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }

}
