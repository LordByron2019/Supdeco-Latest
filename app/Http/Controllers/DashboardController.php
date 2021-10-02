<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Parcour;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request): View|Factory|Application
    {

        $parcours = Parcour::query()
            ->get(['id', 'name', 'description']);

        $filieres = Filiere::with('parcour')->paginate(10, ['id', 'name', 'description', 'parcour_id']);

        return view('dashboard', compact('parcours', 'filieres'));
    }
}
