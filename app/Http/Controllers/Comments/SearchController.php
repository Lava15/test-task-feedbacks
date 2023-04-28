<?php

namespace App\Http\Controllers\Comments;

use App\Enums\CommentStatus;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke($keyword)
    {
        $result = Feedback::query()
            ->where('full_name', 'LIKE', '%' . $keyword . '%')
            ->where('message', 'LIKE', '%' . $keyword . '%')
            ->where('status', CommentStatus::ACCEPTED)
            ->get();

        return view('search', [
            'result ' => $result
        ]);
    }
}
