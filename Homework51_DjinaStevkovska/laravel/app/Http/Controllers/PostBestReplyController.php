<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;

class PostBestReplyController extends Controller
{
    public function store(Reply $reply)
    {
        $this->authorize('update', $reply->post);

        $reply->post->setBestReply($reply);
        return back();
    }
}
