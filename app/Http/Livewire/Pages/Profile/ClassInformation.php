<?php

namespace App\Http\Livewire\Pages\Profile;

use Livewire\Component;

class ClassInformation extends Component
{
    public $student;
    public function render()
    {
        // dd($this->student);
        return view('livewire.pages.profile.class-information');
    }
}
