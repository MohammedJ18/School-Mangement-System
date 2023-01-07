<?php

namespace App\Http\Livewire\Pages\Sections;

use App\Models\Section;
use Livewire\Component;

class Main extends Component
{
    public $sections;
    protected $listeners = ['$refresh'];
    public function render()
    {
        //sections of system 1
        $this->sections = Section::where('system_id', 1)->withCount('groups','students')->get();
        // dd($this->sections->toArray());
        return view('livewire.pages.sections.main');
    }
}
