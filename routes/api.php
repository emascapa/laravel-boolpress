<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//api per raccattare i post
/* Route::get('posts', function () {
    $posts = Post::with(['tags', 'category'])->paginate(6);

    return $posts;

}); */

Route::get('posts', 'API\PostController@index');

Route::get('posts/{post:id}', 'API\PostController@show');

Route::get('categories', 'API\CategoryController@index');

Route::get('tags', 'API\TagController@index');