<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'game_id',
        'platform',
        'version',
        'category',
        'content',
    ];
}
