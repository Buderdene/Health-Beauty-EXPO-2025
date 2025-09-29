<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; // Correctly import the Project model

class PortfolioController extends Controller
{
    public function index() {
        $projects = Project::all();

        return view('portfolio.index', compact('projects'));
    }
}
