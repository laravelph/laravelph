<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function participants()
    {
        return $this->belongsToMany(User::class);
    }
}
