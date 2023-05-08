<?php

namespace App\Http\Controllers;

use App\Jobs\ApplicationApprovedJob;
use App\Jobs\ApplicationDeclinedJob;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::filter()->latest()->paginate(10)->withQueryString();
        $allApplications = Application::count();
        $pendingApplications = Application::where('status', 1)->count();
        $search = request()->search;
        return inertia('Dashboard', compact('applications', 'allApplications', 'pendingApplications', 'search'));
    }

    public function approve($application_id)
    {
        $application = Application::find($application_id);
        $application->update([
            'status' => 2,
            'approved_at' => now(),
            'approved_by' => auth()->id(),
        ]);
        ApplicationApprovedJob::dispatch($application);
        return redirect()->route('dashboard');
    }

    public function decline(Request $request, $application_id)
    {
        $validated = $request->validate([
            'comments' => ['required', 'string']
        ]);
        $application = Application::find($application_id);
        $application->update([
            'status' => 3,
            'declined_at' => now(),
            'declined_by' => auth()->id(),
            'comments' => $validated['comments']
        ]);
        ApplicationDeclinedJob::dispatch($application);
        return redirect()->route('dashboard');
    }
}
