<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherAbsence extends Model
{
    use HasFactory;
    protected $fillable = [
        'teacher_id',
        'date',
        'reason',
        'user_id',
    ];
    ###  Relationships  ###
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    ###  End Relationships  ###
}
