<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class teamMemberPhoto extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $positions;
    public $img;
    public $say;
    public $facebook;
    public function __construct($name,$positions,$img,$say)
    {
        $this->name=$name;
        $this->positions=$positions;
        $this->img=$img;
        $this->say=$say;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.team-member-photo');
    }
}
