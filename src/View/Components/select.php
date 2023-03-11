<?php

namespace Kovyakin\Editor\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class select extends Component {
    public $a='w';
    public $title_;
    /**
     * Create a new component instance.
     */
    public function __construct($id, $title) {
       $this->id_ = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('editor::components.select')->with([
            'a'=>$this->a,
        ]);
    }
}
