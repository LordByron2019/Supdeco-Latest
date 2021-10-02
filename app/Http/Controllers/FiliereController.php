<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFiliereRequest;
use App\Http\Requests\UpdateFiliereRequest;
use App\Models\Filiere;
use App\Models\Parcour;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FiliereController extends Controller
{

    public function create()
    {
        return view('admin.filieres.create', ['parcours' => Parcour::all()]);
    }

    public function edit(Filiere $filiere)
    {
        return view('admin.filieres.edit', ['filiere' => $filiere, 'parcours' => Parcour::all()]);
    }

    public function show(Filiere $filiere)
    {
        return view('admin.filieres.show', compact('filiere'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreFiliereRequest $request
     * @return RedirectResponse
     */
    public function store(StoreFiliereRequest $request): RedirectResponse
    {
        $parcour =  Parcour::find($request->input('parcour'));

        $parcour->filieres()->save(new Filiere([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name')),
            'description' => $request->input('description'),
            'years' => $request->input('years'),
        ]));

        return redirect()->route('dashboard')->with(['success', 'Filiere créée avec succès']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Filiere $filiere
     * @return RedirectResponse
     */
    public function update(UpdateFiliereRequest $request, Filiere $filiere): RedirectResponse
    {
        $filiere->parcour_id = Parcour::find($request->input('parcour'))->id;
        $filiere->save();
        $filiere->update([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name')),
            'description' => $request->input('description'),
            'years' => $request->input('years'),
        ]);

        return back()->with(['success', 'Filiere mise à jour avec succès']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Filiere $filiere
     * @return RedirectResponse
     */
    public function destroy(Filiere $filiere): RedirectResponse
    {
        $filiere->delete();
        return back()->with(['success', 'Filiere mis à jour avec succès']);
    }
}
