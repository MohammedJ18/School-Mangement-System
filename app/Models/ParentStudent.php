<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentStudent extends Model
{
    use HasFactory;
    protected $fillable = [
        'parent_id',
        'student_id',
    ];
    ###  Relationships  ###
    public function parent()
    {
        return $this->belongsTo(Parent::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    ###  End Relationships  ###
}
