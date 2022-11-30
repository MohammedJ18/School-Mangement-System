<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
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
    ### End Relationships ###
}
