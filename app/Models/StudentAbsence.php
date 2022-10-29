<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAbsence extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'date',
        'reason',
        'user_id',
    ];

    ###  Relationships  ###
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    ###  End Relationships  ###
}
