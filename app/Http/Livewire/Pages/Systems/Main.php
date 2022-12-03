<?php

namespace App\Http\Livewire\Pages\Systems;

use App\Models\System;
use Livewire\Component;

class Main extends Component
{
    protected $listeners = ['$refresh'];
    public function render()
    {
        $this->systems = System::where('user_id', auth()->user()->id)->withCount('sections')->get();
        // dd($this->systems->toArray());
        return view('livewire.pages.systems.main');
    }
}
