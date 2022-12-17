<?php

namespace App\Http\Livewire\Pages\Absences;

use App\Models\Student;
use Livewire\Component;

class Main extends Component
{
    protected $listeners = ['$refresh'];
    public function render()
    {
        //  return students where has absences today
        $this->students = Student::whereHas('student_absences', function ($query) {
            $query->where('date', date('Y-m-d'));
        })->withCount('student_absences')->get();
        // dd($students->toArray());
        return view('livewire.pages.absences.main');
    }
}
