<?php

namespace App\Http\Livewire\Pages\Schedules;

use App\Models\Group;
use App\Models\Lesson;
use App\Models\Section;
use App\Models\Subject;
use App\Models\SystemHall;
use App\Models\Teacher;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddSchedule extends Component
{
    use LivewireAlert;
    protected $listeners = ['$refresh'];

    public $section_id, $groups, $group_id, $start_time, $end_time, $day, $subject_id, $teacher_id, $hall_id;
    public $sections, $teachers, $subjects, $system_halls;
    public function render()
    {
        $this->sections = Section::where('system_id', 1)->get();
        $this->groups = Group::where('section_id', 1)->get();
        $this->teachers = Teacher::where('system_id', 1)->get();
        $this->subjects = Subject::where('section_id', 1)->get();
        $this->system_halls = SystemHall::where('system_id', 1)->get();
        return view('livewire.pages.schedules.add-schedule');
    }
    // add lesson method
    public function addLesson()
    {
        Lesson::create([
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'day' => $this->day,
            'subject_id' => $this->subject_id,
            'teacher_id' =>     $this->teacher_id,
            'system_hall_id' => $this->hall_id,
            'section_id' => $this->section_id,
            'group_id' => $this->group_id,
            'system_id' => 1,
            'schedule_id' => 1,
        ]);
        $this->alert('success', 'تم اضافة درس جديد', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'text' => '',
        ]);
        $this->reset();
        $this->emitUp('$refresh');
    }
}
