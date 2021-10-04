<?php

namespace App\Http\Controllers;

use App\Models\Admissions;
use App\Models\Contact;
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
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {

        $parcours = Parcour::query()
            ->get(['id', 'name', 'description']);

        $filieres = Filiere::with('parcour')->paginate(10, ['id', 'name', 'description', 'parcour_id']);

        return view('dashboard', compact('parcours', 'filieres'));
    }


    /**
     * Handle the incoming request.
     *
     * @return Application|Factory|View
     */
    public function admissions(): View|Factory|Application
    {
        $admissions = Admissions::with('filiere')->paginate(10);

        return view('admin.admissions.index', compact('admissions'));
    }

    /**
     * Handle the incoming request.
     *
     * @return Application|Factory|View
     */
    public function admissionShow(Admissions $admission): View|Factory|Application
    {
        return view('admin.admissions.show', compact('admission'));
    }

    /**
     * Handle the incoming request.
     *
     * @return Application|Factory|View
     */
    public function messages(): View|Factory|Application
    {
        $messages = Contact::paginate(10);

        return view('admin.conctats.index', compact('messages'));
    }

    /**
     * Handle the incoming request.
     *
     * @return Application|Factory|View
     */
    public function messageShow(Contact $message): View|Factory|Application
    {
        return view('admin.conctats.show', compact('message'));
    }
}
