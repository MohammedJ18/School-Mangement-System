<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemHall extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
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
