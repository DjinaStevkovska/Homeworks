<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;
use App\Reply;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create()->each(function ($user) 
        {
            $user->posts()->save(
                factory(Post::class)->create(['user_id' => $user->id])
            );
        });

        $posts = Post::all();
        
        $posts->each(function ($post) 
        {
            factory(Reply::class, 5)->create(['post_id' => $post->id]);
        });
    }

}

// create() = make()