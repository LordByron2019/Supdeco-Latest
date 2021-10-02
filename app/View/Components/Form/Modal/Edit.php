<?php

namespace App\View\Components\Form\Modal;

use Illuminate\View\Component;

class Edit extends Component
{

    /**
     * @var
     */
    public $dataForm;

    public $isFiliere;

    public $action;

    public $parcours;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($dataForm, $isFiliere, $action, $parcours = null)
    {
        $this->dataForm = $dataForm;
        $this->isFiliere = $isFiliere;
        $this->action = $action;
        $this->parcours = $parcours;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.modal.edit');
    }
}
