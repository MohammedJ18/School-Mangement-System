<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'person_id',
    ];
    ###  Relationships  ###
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
    ### End Relationships ###
}
