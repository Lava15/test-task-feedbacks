<?php

namespace App\Http\Controllers\Comments;

use App\Enums\CommentStatus;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke()
    {
        $feedbacks = Feedback::query()->where('status', CommentStatus::ACCEPTED)->latest()->paginate(5);
        return (view('feedbacks', [
            'feedbacks' => $feedbacks
        ]));
    }
}
