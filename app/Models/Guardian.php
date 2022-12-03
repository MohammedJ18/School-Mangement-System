<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'system_id',
    ];
    ###  Relationships  ###
    public function students()
    {
        return $this->belongsToMany(Student::class, 'parent_students');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    ###  End Relationships  ###
}

