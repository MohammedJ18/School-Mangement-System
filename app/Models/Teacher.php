<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'system_id',
    ];
    ###  Relationships  ###
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
    //teacher absences
    public function absences()
    {
        return $this->hasMany(Absence::class);
    }
    ### End Relationships ###
}
