<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentNotification extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'date',
        'body',
        'title',
    ];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
