<?php

namespace App\Http\Livewire\Pages\Sections;

use App\Models\Student;
use App\Models\User;
use Livewire\Component;

class Group extends Component
{
    public $students;
    public function mount($id)
    {
        $this->students = Student::where('group_id', $id)->with('user')->get();
    }
    public function render()
    {
        return view('livewire.pages.sections.group');
    }
}
