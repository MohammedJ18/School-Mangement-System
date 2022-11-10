<?php

namespace App\Http\Livewire\Pages\Students;

use App\Models\Student;
use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        $this->students = Student::get();
        // dd($this->students->toArray());
        return view('livewire.pages.students.main');
    }
}
