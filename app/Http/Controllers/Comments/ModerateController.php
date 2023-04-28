<?php

namespace App\Http\Controllers\Comments;

use App\Enums\CommentStatus;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ModerateController extends Controller
{
    public function index(): View
    {
        $feedbacks = Feedback::query()->where('status', CommentStatus::PENDING)->paginate(10);
        return view('moderate', [
            'feedbacks' => $feedbacks
        ]);
    }

    public function accept(Feedback $feedback): RedirectResponse
    {
        $feedback->update([
            'status' => CommentStatus::ACCEPTED->value
        ]);
        return redirect()->back()->with('accepted', 'Одобрено');
    }

    public function reject(Feedback $feedback): RedirectResponse
    {
        $feedback->update([
            'status' => CommentStatus::REJECTED->value
        ]);

        return redirect()->back()->with('rejected', 'Не одобрено');
    }
}
