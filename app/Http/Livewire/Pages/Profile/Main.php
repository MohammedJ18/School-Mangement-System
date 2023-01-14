<?php

namespace App\Http\Livewire\Pages\Profile;

use App\Models\Student;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Main extends Component
{
    use LivewireAlert;
    protected $listeners = ['$refresh', 'confirmed'];
    public $student;
    // delete student method
    public function deleteStudent($id)
    {
        $this->alert('warning', 'هل انت متأكد من حذف حساب الطالب؟', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'showCancelButton' => true,
            'onDismissed' => '',
            'cancelButtonText' => 'الغاء',
            'showDenyButton' => true,
            'onDenied' => 'confirmed',
            'denyButtonText' => 'حذف',
           ]);
           
    }
    public function confirmed()
    {
        $this->student->delete();
        $this->alert('success', 'تم حذف حساب الطالب بنجاح');
        sleep(3);
        return redirect()->route('students');
    }
    public function mount($id)
    {
        $this->student = Student::withCount("student_absences")->findOrFail($id);
        // dd($this->student->toArray());
    }
    public function render()
    {
        return view('livewire.pages.profile.main');
    }
}
