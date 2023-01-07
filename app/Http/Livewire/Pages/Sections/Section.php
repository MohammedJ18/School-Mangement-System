<?php

namespace App\Http\Livewire\Pages\Sections;

use App\Models\Group;
use Livewire\Component;

class Section extends Component
{
    public $groups;
    protected $listeners = ['$refresh'];
    public function mount($id)
    {
        $this->groups = Group::where('section_id', $id)->withCount('students')->get();
    }
    public function render()
    {
        return view('livewire.pages.sections.section');
    }
}
