<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory;

    /**
     * Inverse relationship for user.
     * A single advert instance belongs to a single user.
     */
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
}
