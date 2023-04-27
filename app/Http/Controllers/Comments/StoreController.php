<?php

namespace App\Http\Controllers\Comments;

use App\Enums\CommentStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentsRequest;
use App\Models\Feedback;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{
    public function __invoke(CommentsRequest $request): RedirectResponse
    {
        Feedback::query()->create($request->validated() + [
                'status' => CommentStatus::PENDING->value
            ]);
        return redirect()->back()->with('message', 'Благодарим за обратную связь');

    }
}
