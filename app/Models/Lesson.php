<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'schedule_id',
        'section_id',
        'system_hall_id',
        'teacher_id',
        'subject_id',
        'group_id',
        'start_time',
        'end_time',
        'day',
    ];
    ### RELATIONSHIPS ###
    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
    public function systemHall()
    {
        return $this->belongsTo(SystemHall::class);
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    ### END RELATIONSHIPS ###
}
