<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DynamicForm extends Component
{
    public $formData;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $formData=json_decode(html_entity_decode($data),true);
        $c=collect($formData);
        $sorted=$c->sortBy('order');
        $this->formData = $sorted;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dynamic-form');
    }
}
