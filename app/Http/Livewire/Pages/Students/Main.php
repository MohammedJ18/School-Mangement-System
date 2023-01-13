<?php

namespace App\Http\Livewire\Pages\Students;

use App\Models\Group;
use App\Models\Section;
use App\Models\Student;
use App\Models\User;
use Livewire\Component;

class Main extends Component
{
    protected $listeners = [ '$refresh'];
    #
    public $name;
    public $students;
    public $sections;
    public $section_id;
    public $groups;
    public $group_id;

    public function render()
    {
        // student with user when name of user is like $this->name
        $this->students = Student::with('user')->whereHas('user', function ($query) {
            $query->where('name', 'like', '%' . $this->name . '%');
        })->when($this->section_id, function ($query) {
            $query->where('section_id', $this->section_id);
        })->when($this->group_id, function ($query) {
            $query->where('group_id', $this->group_id);
        })->get();
        
        // sections of system 1
        $this->sections = Section::where('system_id', 1)->get();
        // groups of section_id
        $this->groups = Group::where('section_id', $this->section_id)->get();

        return view('livewire.pages.students.main');
    }
}
