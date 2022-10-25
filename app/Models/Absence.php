<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;
    protected $fillable = [
        'person_id',
        'date',
        'reason',
    ];
    ###  Relationships  ###
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
    ### End Relationships ###
    
}
