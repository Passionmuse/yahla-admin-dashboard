<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Activity extends Component
{
    public $actions;
    public $title;
    public $all;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($actions = [], $title = 'Admin Activity Timeline', $all = true)
    {
        $this->actions = $actions;
        $this->title = $title;
        $this->all = $all;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.activity');
    }
}
