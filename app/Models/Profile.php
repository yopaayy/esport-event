<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'full_name',
        'phone',
        'address',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
