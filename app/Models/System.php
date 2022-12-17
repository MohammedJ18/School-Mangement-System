<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'user_id', 'description', 'address', 'type'];

    ###  Relationships  ###
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function sections()
    {
        return $this->hasMany(Section::class);
    }
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
    public function systemHalls()
    {
        return $this->hasMany(SystemHall::class);
    }
    public function systemNotifications()
    {
        return $this->hasMany(SystemNotification::class);
    }
    ### End Relationships ###
}
