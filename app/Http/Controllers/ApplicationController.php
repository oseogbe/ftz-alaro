<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::filter()->latest()->paginate();

        return inertia('Dashboard', compact('applications'));
    }

    public function filter()
    {
        return Application::filter()->latest()->paginate(1);
    }
}
