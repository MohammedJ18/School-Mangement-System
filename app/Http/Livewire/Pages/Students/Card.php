<?php

namespace App\Http\Livewire\Pages\Students;

use Livewire\Component;

class Card extends Component
{
    public $student;
    public function render()
    {
        return view('livewire.pages.students.card');
    }
}
