<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class UserDomicilio extends Model
{
    protected $table = 'user_domicilio';
 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
