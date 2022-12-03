<?php

namespace App\Http\Livewire\Pages\Home;

use Livewire\Component;

class StatsCard extends Component
{
    public $item;
    public function render()
    {
        return view('livewire.pages.home.stats-card');
    }
}
