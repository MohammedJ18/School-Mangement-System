<?php

namespace App\Http\Livewire\Pages\Sections;

use App\Models\Group;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddGroup extends Component
{
    use LivewireAlert;
    protected $listeners = ['$refresh'];
    public $name;
    public function render()
    {
        return view('livewire.pages.sections.add-group');
    }

    //add group
    public function addGroup()
    {
        $this->validate([
            'name' => 'required | min:3 | max:255 | string',
        ]);
        Group::create([
            'name' => $this->name,
            'system_id' => 1,
            'section_id' => 1,
        ]);
        $this->alert('success', 'تم اضافة صف جديد', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'text' => '',
        ]);
        $this->reset();
        $this->emitUp('$refresh');
    }
}
