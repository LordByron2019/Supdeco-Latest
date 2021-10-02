<?php

namespace App\View\Components\Form\Modal;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Create extends Component
{
    public $isFiliere;

    public $action;

    public $parcours;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($isFiliere, $action, $parcours = null)
    {
        $this->isFiliere = $isFiliere;
        $this->action = $action;
        $this->parcours = $parcours;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|\Closure|string
     */
    public function render(): View|\Closure|string
    {
        return view('components.form.modal.create');
    }
}
