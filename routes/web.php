<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/posts');



Route::get('/post/{post}', function(Post $post) {


    return view('view_post', $post);
});


Route::get('/posts', function () {
    return view('post_list', [
        'posts' => Post::all(),
    ]);
});

Route::get('/author/{author}', function(User $author) {
    return view('post_list', [
        'posts' => $author->posts
    ]);
});

Route::get("/category/{category}", function(Category $category) {
    return view('post_list', [
        'posts' => $category->posts
    ]);
});
