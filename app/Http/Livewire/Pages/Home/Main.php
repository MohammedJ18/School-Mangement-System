<?php

namespace App\Http\Livewire\Pages\Home;

use App\Models\Guardian;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\Teacher;
use Livewire\Component;

class Main extends Component
{
    public $counts = [];
    public function mount($id)
    {
        $this->ID = $id;
    }
    public function render()
    {
        $this->counts = [
            [
                'name' => 'الطلاب',
                'count' => Student::where('system_id', $this->ID)->count(),
            ],
            [
                'name' => 'الأساتذة',
                'count' => Teacher::where('system_id', $this->ID)->count(),
            ],
            [
                'name' => 'اولياء الامور',
                'count' => Guardian::where('system_id', $this->ID)->count(),
            ],
        ];
        $currentTimeWithTimezone = now()->timezone('Asia/Riyadh')->format('H:i:s');
        $this->lessons = Lesson::where('day', date('N'))->where('start_time', '<=', $currentTimeWithTimezone)->where('end_time', '>=', $currentTimeWithTimezone)->get();
        //dd($this->lessons->toArray());
        return view('livewire.pages.home.main');
    }
}
