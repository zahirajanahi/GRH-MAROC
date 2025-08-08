<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\JobOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the applications (admin only).
     */
    public function index()
    {
        $applications = Application::with('jobOffer')->latest()->paginate(15);
        return view('applications.index', compact('applications'));
    }

    /**
     * Show the application form for a job offer (public).
     */
    public function create(JobOffer $jobOffer)
    {
        return view('applications.create', compact('jobOffer'));
    }

    /**
     * Store a newly created application in storage (public).
     */
    public function store(Request $request, JobOffer $jobOffer)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:30',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'message' => 'nullable|string',
        ]);
        // Handle CV upload
        $cvPath = $request->file('cv')->store('cvs', 'public');
        $application = Application::create([
            'job_offer_id' => $jobOffer->id,
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'cv' => $cvPath,
            'message' => $validated['message'] ?? null,
        ]);
        // Optional: Send email notification to admin
        try {
            Mail::raw('Nouvelle candidature pour l\'offre: ' . $jobOffer->title . "\nNom: " . $application->full_name . "\nEmail: " . $application->email, function ($message) {
                $message->to('admin@interim.com')->subject('Nouvelle candidature reçue');
            });
        } catch (\Exception $e) {}
        return redirect()->route('job-offers.public')->with('success', 'Votre candidature a été envoyée avec succès.');
    }
}
