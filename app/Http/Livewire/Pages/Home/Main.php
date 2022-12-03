<?php

namespace App\Http\Livewire\Pages\Home;

use App\Models\Guardian;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\SystemNotification;
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
        $this->currentLessons = Lesson::where('day', date('N'))->where('start_time', '<=', $currentTimeWithTimezone)->where('end_time', '>=', $currentTimeWithTimezone)
        ->where('system_id', $this->ID)->get();
        $this->systemNotifications = SystemNotification::where('system_id', $this->ID)->take(3)->get();
        // dd($this->systemNotifications->toArray());
        //dd($this->lessons->toArray());
        return view('livewire.pages.home.main');
    }
}
