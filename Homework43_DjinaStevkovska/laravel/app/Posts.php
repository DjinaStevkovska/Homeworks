<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public function published() {
        $this->published = true;
        $this->save();
    }
}
