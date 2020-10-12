<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ContactList extends Component
{

    public $icon, $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($icon, $title)
    {
        $this->icon = $icon;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.contact-list');
    }
}
