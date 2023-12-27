<?php

namespace App\Livewire;

use Livewire\Component;

class Breadcrumb extends Component
{
    public $homeUrl;
    public $projectsUrl;
    public $projectsText;

    public function mount($homeUrl, $projectsUrl, $projectsText)
    {
        $this->homeUrl = $homeUrl;
        $this->projectsUrl = $projectsUrl;
        $this->projectsText = $projectsText;
    }

    public function render()
    {
        return view('livewire.breadcrumb');
    }
}
