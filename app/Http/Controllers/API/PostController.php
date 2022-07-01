<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;



class PostController extends Controller
{
    //
    public function index() {
        $posts = Post::with(['tags', 'category'])->paginate(6);

        return $posts;
    }

        //
        public function show($id) {
            $post = Post::with(['tags', 'category'])->find($id);
    
            if($post) {
                return $post;
            } else {
                return response()->json([
                    'status_code' => 404,
                    'status_text' => 'not found'
                ]);
            }
        }

/*         public function show(Post $post) {
            $post = Post::find($post->id)->with(['tags', 'category']);
     
            return $post;
        } */
}
