<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Result extends Model
{
    protected $fillable = [
        'event_id',
        'user_id',
        'rank',
        'description',
    ];
}
