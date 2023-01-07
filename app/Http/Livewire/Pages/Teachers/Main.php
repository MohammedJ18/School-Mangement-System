<?php

namespace App\Http\Livewire\Pages\Teachers;

use Livewire\Component;

class Main extends Component
{
    public $teachers;
    public function render()
    {
        $this->teachers = \App\Models\Teacher::all();
        return view('livewire.pages.teachers.main');
    }
}
