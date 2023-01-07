<?php

namespace App\Http\Livewire\Pages\Sections;

use App\Models\Section;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class AddSection extends Component
{
    use LivewireAlert;
    protected $listeners = ['$refresh'];
    public $name;
    public function render()
    {
        return view('livewire.pages.sections.add-section');
    }

    //add section
    public function addSection()
    {
        $this->validate([
            'name' => 'required | min:3 | max:255 | string',
        ]);
        Section::create([
            'name' => $this->name,
            'system_id' => 1,
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
