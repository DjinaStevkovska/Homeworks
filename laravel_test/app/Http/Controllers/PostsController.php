<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use \DB;
use App\Posts;

// BROWSER URL -> Router (web.php) -> Controller (Post Controller) : Model -> View (posts.blade.php)

class PostsController extends Controller
{
    public function show($slug) {
        // SELECT * FROM posts WHERE slug="my-first-post";
        // $posts = DB::table('posts')->where('slug, $slug')->first();

        // if(!array_key_exists($slug, $posts)) {
        //     abort(404);
        // }

        $posts = Posts::where('slug', $slug)->firstOrFail();


        // dd($slug);

     

        return view('posts', [
                'post'=>$posts
                //[$slug]
            ]);

    }
}
