<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description',
        'location',
        'date',
        'quota',
        'poster'
    ];

    public function registration() {
        return $this->hasMany(Registration::class);
    }

    public function result() {
        return $this->hasMany(Result::class);
    }
}
