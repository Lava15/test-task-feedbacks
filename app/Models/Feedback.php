<?php

namespace App\Models;

use App\Enums\CommentStatus;
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

    public function scopeSearch($query, $searchTerm)
    {
        return $query
            ->where('full_name', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('message', 'LIKE', '%' . $searchTerm . '%')
            ->where('status', CommentStatus::ACCEPTED);
    }
}
