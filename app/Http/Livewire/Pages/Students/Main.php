<?php

namespace App\Http\Livewire\Pages\Students;
use App\Models\User;
use Livewire\Component;

class Main extends Component
{
    public $name;
    public function render()
    { 
        // students from users table where type is 1 and when $name is not null
        $this->students = User::where('type', 1)->when($this->name, function($query){
            $query->where('name', 'like', '%'.$this->name.'%');
        })->get();
        // if($this->name)
        // dd($this->students->toArray());
        return view('livewire.pages.students.main');
    }
}
