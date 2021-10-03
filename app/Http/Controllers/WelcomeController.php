<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request): View|Factory|Application
    {
        $filieres = Filiere::with('parcour')->take(8)->get(['id', 'name', 'years', 'description', 'parcour_id']);
        return view('welcome', compact('filieres'));
    }
}
