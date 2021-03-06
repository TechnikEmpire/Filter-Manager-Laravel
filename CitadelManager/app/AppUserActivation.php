<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppUserActivation extends Model
{
    
    protected $fillable = [
        'identifier', 'device_id', 'user_id',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
