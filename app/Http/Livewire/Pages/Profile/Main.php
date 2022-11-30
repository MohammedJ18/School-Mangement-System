<?php

namespace App\Http\Livewire\Pages\Profile;

use App\Models\Student;
use Livewire\Component;

class Main extends Component
{
    public $student;
    public function mount($id){
        $this->student = Student::withCount("student_absences")->findOrFail($id);
        //dd($this->student->toArray());
    }
    public function render()
    {
        return view('livewire.pages.profile.main');
    }
}
