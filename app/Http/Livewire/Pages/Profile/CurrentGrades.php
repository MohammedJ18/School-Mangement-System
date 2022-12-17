<?php

namespace App\Http\Livewire\Pages\Profile;

use Livewire\Component;

class CurrentGrades extends Component
{
    public $sum;
    public function render()
    {

        return view('livewire.pages.profile.current-grades');
    }
}
