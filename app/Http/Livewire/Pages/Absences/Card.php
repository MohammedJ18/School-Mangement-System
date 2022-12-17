<?php

namespace App\Http\Livewire\Pages\Absences;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Card extends Component
{
    use LivewireAlert;
    
    public $student;
    // addNotification method
    public function addNotification(){
        $this->student->notifications()->create([
            'title' => 'تنبيه',
            'body' => "ارسلت اليك المدرسة تنبيه بسبب غياباتك",
            'student_id' => $this->student->id,
            'date' => date('Y-m-d'),
        ]);
        $this->alert('success', 'تم ارسال تنبيه للطالب', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'text' => '',
           ]);
    }
    public function render()
    {
        return view('livewire.pages.absences.card');
    }
}
