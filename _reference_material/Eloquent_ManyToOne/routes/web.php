<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/utilizador', [])

Route::get('user/new/name={name}&email={email}&password={pass}', function($name,$email,$pass){
    $user = new User(['name' => $name, 'email' => $email, 'password' => bcrypt($pass)]);

    $user->save();

    echo "<script>alert('user saved!')</script>";

    echo $user;
});

Route::get('user/{id}/CreatePost/title={title}&body={body}', function($id,$title,$body){
    $user = User::findOrFail($id);

    $post = new Post(['title' => $title, 'body' => $body]);

    $user->posts()->save($post);

    echo "<script>alert('post created !')</script>";

    echo $user->posts()->findOrFail($post->id);
});

Route::get('user/{id}/posts', function($id){
    $user = User::findOrFail($id);

    foreach($user->posts as $post){
        echo $post->title . "<hr>";
    }
});