<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $class, $target, $text;

    public function __construct($class, $target, $text)
    {
        $this->class = $class;
        $this->target = $target;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
