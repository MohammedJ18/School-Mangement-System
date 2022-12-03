<?php

namespace App\Http\Livewire\Pages\Home;

use Livewire\Component;

class NextLessons extends Component
{
    public $item;
    public function render()
    {
        // dd($this->item->toArray());
        return view('livewire.pages.home.next-lessons');
    }
}
