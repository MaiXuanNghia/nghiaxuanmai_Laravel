<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

use function PHPSTORM_META\type;

class Alter extends Component
{
    /**
     * Create a new component instance.
     */
    public $type;
    public $content;
    public $icon;
    public function __construct($type = "success", $content = "đặt hàng thành công", $icon='check')
    {
        $this->type = $type;
        $this->content = $content;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alter');
    }
}
