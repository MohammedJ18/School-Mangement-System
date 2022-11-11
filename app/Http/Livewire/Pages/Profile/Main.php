<?php

namespace App\Http\Livewire\Pages\Profile;

use App\Models\Student;
use Livewire\Component;

class Main extends Component
{
    public function mount($id){
        $this->student = Student::findOrFail($id);
    }
    public function render()
    {   

        return view('livewire.pages.profile.main');
    }
}
