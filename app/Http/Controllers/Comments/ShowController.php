<?php

namespace App\Http\Controllers\Comments;

use App\Enums\CommentStatus;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Request $request)
    {
        $searchTerm = $request->input('search');
        $feedbacks = Feedback::query();
        if (!empty($searchTerm)) {
            $feedbacks = $feedbacks->search($searchTerm);
            return (view('feedbacks', [
                'feedbacks' => $feedbacks->where('status', CommentStatus::ACCEPTED)->latest()->paginate(5)
            ]));
        }
        return (view('feedbacks', [
            'feedbacks' => $feedbacks->where('status', CommentStatus::ACCEPTED)->latest()->paginate(5)
        ]));
    }
}
