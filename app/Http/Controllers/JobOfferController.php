<?php

namespace App\Http\Controllers;

use App\Models\JobOffer;
use Illuminate\Http\Request;

class JobOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = JobOffer::latest()->paginate(10);
        return view('job_offers.index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('job_offers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'sector' => 'required|string|max:255',
            'description' => 'required|string',
            'contract_type' => 'required|string|max:255',
            'education_level' => 'required|string|max:255',
            'experience_years' => 'required|integer|min:0',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'publication_date' => 'required|date',
        ]);
        JobOffer::create($validated);
        return redirect()->route('job-offers.index')->with('success', 'Offre créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(JobOffer $jobOffer)
    {
        return view('job_offers.show', compact('jobOffer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobOffer $jobOffer)
    {
        return view('job_offers.edit', compact('jobOffer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobOffer $jobOffer)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'sector' => 'required|string|max:255',
            'description' => 'required|string',
            'contract_type' => 'required|string|max:255',
            'education_level' => 'required|string|max:255',
            'experience_years' => 'required|integer|min:0',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'publication_date' => 'required|date',
        ]);
        $jobOffer->update($validated);
        return redirect()->route('job-offers.index')->with('success', 'Offre modifiée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobOffer $jobOffer)
    {
        $jobOffer->delete();
        return redirect()->route('job-offers.index')->with('success', 'Offre supprimée avec succès.');
    }
}
