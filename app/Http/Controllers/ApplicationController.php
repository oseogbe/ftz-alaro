<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::filter()->latest()->paginate()->withQueryString();

        $pendingApplications = Application::where('status', 1)->count();

        $search = request()->search;

        return inertia('Dashboard', compact('applications', 'pendingApplications', 'search'));
    }
}
