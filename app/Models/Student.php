<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'group_id',
        'user_id',
        'section_id',
        'system_id',
    ];

    ###  Relationships  ###
    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
    public function parents()
    {
        return $this->belongsToMany(Guardian::class, 'parent_students');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function student_absences()
    {
        return $this->hasMany(StudentAbsence::class);
    }
    ###  End Relationships  ###
}
