<?php

namespace App\Livewire;

use Livewire\Component;

class Button extends Component
{
    public $buttonText;
    public $buttonAction;
    public $wireClickAction;

    public function render()
    {
        return view('livewire.button');
    }
}
