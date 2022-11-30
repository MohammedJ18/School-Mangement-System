<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'system_id',
    ];
    ### RELATIONSHIPS ###
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
    public function system()
    {
        return $this->belongsTo(System::class);
    }
    ### END RELATIONSHIPS ###

}
