<?php

namespace App\Http\Livewire\Pages\Systems;

use App\Models\System;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddSystem extends Component
{
    use LivewireAlert;
    protected $listeners = ['$refresh'];
    public $name;
    public $address;
    public function render()
    {
        return view('livewire.pages.systems.add-system');
    }
    public function addSystem(){
        $this->validate([
            'name' => 'required | min:3 | max:255 | string',
            'address' => 'required | min:3 | max:255 | string',
        ]);
        System::create([
            'name' => $this->name,
            'address' => $this->address,
            'user_id' => auth()->user()->id,
        ]);
        $this->alert('success', 'تم اضافة مؤسسة تعليمية جديدة', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'text' => '',
           ]);
        $this->reset();
        $this->emitUp('$refresh');
    }
}
