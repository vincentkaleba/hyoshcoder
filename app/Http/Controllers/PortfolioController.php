<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = \App\Models\Project::all();
        return view('welcome', compact('projects'));
    }

    public function show(\App\Models\Project $project)
    {
        return view('projects.show', compact('project'));
    }
}