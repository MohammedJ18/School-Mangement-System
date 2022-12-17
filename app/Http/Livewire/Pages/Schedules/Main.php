<?php

namespace App\Http\Livewire\Pages\Schedules;

use App\Models\Lesson;
use Livewire\Component;

class Main extends Component
{
    public $lessons;
    public $group = 1;
    public $section = 1;
    public function render()
    {
        // sundayLessons
        $this->sundayLessons = Lesson::where('group_id', $this->group)->where('section_id', $this->section)->where('day', 7)->get();
        // mondayLessons
        $this->mondayLessons = Lesson::where('group_id', $this->group)->where('section_id', $this->section)->where('day', 1)->get();
        // tuesdayLessons
        $this->tuesdayLessons = Lesson::where('group_id', $this->group)->where('section_id', $this->section)->where('day', 2)->get();
        // wednesdayLessons
        $this->wednesdayLessons = Lesson::where('group_id', $this->group)->where('section_id', $this->section)->where('day', 3)->get();
        // thursdayLessons
        $this->thursdayLessons = Lesson::where('group_id', $this->group)->where('section_id', $this->section)->where('day', 4)->get();
        return view('livewire.pages.schedules.main');
    }
}
