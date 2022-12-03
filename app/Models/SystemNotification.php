<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemNotification extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'message',
        'system_id',
    ];
    ### RELATIONSHIPS ###
    public function system()
    {
        return $this->belongsTo(System::class);
    }
    ### END RELATIONSHIPS ###
}
