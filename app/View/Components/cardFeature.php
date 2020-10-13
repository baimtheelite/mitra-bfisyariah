<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cardFeature extends Component
{
    public $image, $title, $text;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $title, $text)
    {
        $this->image = $image;
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
