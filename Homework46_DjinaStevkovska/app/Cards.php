<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use App\User;
Use App\Category;

class Cards extends Model
{
    protected $table = 'cards';

    protected $fillable = ['img', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    } 

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
}

