<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\SendLikeRequest;
use App\Models\User;

class UserController extends Controller
{
    public function show(User $user)
    {
        return inertia('User/Show', compact('user'));
    }

    public function sendLike(SendLikeRequest $request)
    {
        $data = $request->validated();
        $likeStr = 'Your like from user id ' . $data['from_id'];

        return response()->json([
           'like_str' => $likeStr
        ]);
    }
}
