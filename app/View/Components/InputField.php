<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputField extends Component
{
    public $class, $model, $placeholder, $type;

    public function __construct($class, $model, $placeholder, $type)
    {
        $this->class = $class;
        $this->model = $model;
        $this->placeholder = $placeholder;
        $this->type = $type;
        
    }


    public function render()
    {
        return view('components.input-field');
    }
}
