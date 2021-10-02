<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreParcourRequest;
use App\Http\Requests\UpdateParcourRequest;
use App\Models\Parcour;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class ParcourController extends Controller
{

    public function create()
    {
        return view('admin.parcours.create');
    }

    public function edit(Parcour $parcour)
    {
        return view('admin.parcours.edit', compact('parcour'));
    }

    public function show(Parcour $parcour)
    {
        return view('admin.parcours.show', compact('parcour'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreParcourRequest $request
     * @return RedirectResponse
     */
    public function store(StoreParcourRequest $request): RedirectResponse
    {
        Parcour::create([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name')),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('dashboard')->with(['success', 'Parcour Crée avec succès']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateParcourRequest $request
     * @param Parcour $parcour
     * @return RedirectResponse
     */
    public function update(UpdateParcourRequest $request, Parcour $parcour): RedirectResponse
    {
        $parcour->update([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name')),
            'description' => $request->input('description'),
        ]);

        return back()->with(['success', 'Parcour mis à jour avec succès']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Parcour $parcour
     * @return RedirectResponse
     */
    public function destroy(Parcour $parcour): RedirectResponse
    {
        $parcour->delete();
        return back()->with(['success', 'Parcour supprimé avec succès']);
    }
}
