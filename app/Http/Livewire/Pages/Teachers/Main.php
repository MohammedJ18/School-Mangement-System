<?php

namespace App\Http\Livewire\Pages\Teachers;

use App\Models\Teacher;
use Livewire\Component;

class Main extends Component
{
    public $teachers;
    public $name;
    public function render()
    {
        //teachers with user when name of user = $this->name
        $this->teachers = Teacher::with('user')->whereHas('user', function ($query) {
            $query->where('name', 'like', '%' . $this->name . '%');
        })->get();
        return view('livewire.pages.teachers.main');
    }
}
