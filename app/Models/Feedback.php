<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'message',
        'status',
    ];
    protected $dateFormat = 'U';

    protected $casts = [
        'status' => 'integer'
    ];
}
