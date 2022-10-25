<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'group_id',
        'subject_id',
        'person_id',
        'section_id',
    ];

    // Relationships
    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function section()
    {
        return $this->hasOne(Section::class);
    }

    public function group()
    {
        return $this->hasOne(Group::class);
    }
}
