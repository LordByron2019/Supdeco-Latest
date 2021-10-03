<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdmissionRequest;
use App\Models\Admissions;
use App\Models\Filiere;
use Illuminate\Http\Request;

class AdmissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admissions', ['filieres' => Filiere::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreAdmissionRequest $request)
    {
//        dd($request);

        $filiere = Filiere::find($request->input('filiere'));

        $filiere->admissions()->create($request->validated());

        return back()->with(['status', 'Admission soumise avec succès']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admissions  $admissions
     * @return \Illuminate\Http\Response
     */
    public function show(Admissions $admissions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admissions  $admissions
     * @return \Illuminate\Http\Response
     */
    public function edit(Admissions $admissions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admissions  $admissions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admissions $admissions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admissions  $admissions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admissions $admissions)
    {
        //
    }
}
