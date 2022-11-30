<?php

namespace App\Http\Livewire\Pages\Students;
use App\Models\User;
use Livewire\Component;

class Main extends Component
{
    public $search;
    public function render()
    { 
       // sleep(1);
        $this->users = User::where('type',1)->when($this->search,function($query,$search){
            return $query->where('name','LIKE',"%$search%");
        })->get();
        // dd($this->students);
        return view('livewire.pages.students.main');
    }
}
