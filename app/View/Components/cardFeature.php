<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cardFeature extends Component
{
    public $icon, $title, $text;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($icon, $title, $text)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.card-feature');
    }
}
