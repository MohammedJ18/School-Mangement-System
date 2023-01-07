<?php

namespace App\Http\Livewire\Pages\Schedules;

use App\Models\Group;
use App\Models\Lesson;
use App\Models\Section;
use Livewire\Component;

class Main extends Component
{
    public $lessons;
    public $group_id = 1;
    public $section_id = 1;
    public $sundayLessons, $mondayLessons, $tuesdayLessons, $wednesdayLessons, $thursdayLessons;
    public $sections, $groups;
    public function render()
    {
        // sundayLessons
        $this->sundayLessons = Lesson::where('group_id',1)->where('section_id', 1)->where('day', 7)->get();
        // mondayLessons
        $this->mondayLessons = Lesson::where('group_id', $this->group_id)->where('section_id', $this->section_id)->where('day', 1)->get();
        // tuesdayLessons
        $this->tuesdayLessons = Lesson::where('group_id', $this->group_id)->where('section_id', $this->section_id)->where('day', 2)->get();
        // wednesdayLessons
        $this->wednesdayLessons = Lesson::where('group_id', $this->group_id)->where('section_id', $this->section_id)->where('day', 3)->get();
        // thursdayLessons
        $this->thursdayLessons = Lesson::where('group_id', $this->group_id)->where('section_id', $this->section_id)->where('day', 4)->get();

        // sections of system
        $this->sections = Section::where('system_id', 1)->get();
        // groups of section
        $this->groups = Group::where('section_id', $this->section_id)->get();
        return view('livewire.pages.schedules.main');
    }
}
