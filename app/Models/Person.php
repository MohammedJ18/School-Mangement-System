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
}
