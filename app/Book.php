<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Rating;

class Book extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
