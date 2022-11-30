<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'section_id',
    ];
    ###  Relationships  ###
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
    ###  End Relationships  ###
}
