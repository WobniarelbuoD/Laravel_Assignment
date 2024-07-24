<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'game_id',
        'platform',
        'version',
        'category',
        'content',
        'status',
    ];
}
