<?php

namespace App\Http\Controllers;

use Auth;
use App\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index')->withProjects($projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('projects.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:3',
            'due-dates' => 'required|date|after:today',
            'notes' => 'required|min 10',
            'status' => 'required'
        ] );

        $project = new Project;
        $project->project_name = $request->input('name');
        $project->project_notes = $request->input('notes');
        $project->due_date       = $request->input('due-date');
        $project->project_notes  = $request->input('notes');
        $project->user_id        = Auth::user()->id;

        $project->save();

        return redirect()->route('projects.index')->with('info','Your Project has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
