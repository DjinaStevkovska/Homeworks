<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Reply;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function setBestReply($reply)
    {
        $this->best_reply_id = $reply->id;
        $this->save();
    }
}
