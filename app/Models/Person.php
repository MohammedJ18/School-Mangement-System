<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $fillable = [
        'system_id',
        'name',
        'username',
        'password',
        'phone',
        'gender',
        'birth_date',
        'address',
        'type',
    ];

    // Relationships



    public function system()
    {
        return $this->belongsTo(System::class);
    }
    
    public function absences()
    {
        return $this->hasMany(Absence::class);
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    public function parent()
    {
        return $this->hasOne(Parent::class);
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }
  
}
