<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Server extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'server_name',
        'server_description',
        'server_slots',
        'server_game',
        'server_ip',
    ];

    /**
     * A single server instance belongs to one user.
     */
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
}
