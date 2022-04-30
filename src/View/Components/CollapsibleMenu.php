<?php
namespace Wills\Encase\View\Components;

use Illuminate\View\Component;

class CollapsibleMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // dd('masuk');
        return view('encase::components.collapsible-menu');
    }
}
