<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register', [
            'success' => session('success')
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|string|email|max:100|unique:'.Application::class,
            'phone' => 'required|string|max:20|unique:'.Application::class,
            'company_name' => 'required|string|max:50',
            'company_email' => 'required|string|email|max:100|unique:'.Application::class,
        ]);

        $application = Application::create($validated);

        // event(new ApplicationSubmitted($application));

        // return inertia('Auth/Register', ['success' => 'Application submitted successfully.']);
        return redirect()->route('register')->with('success', 'Application submitted successfully.');
    }
}
