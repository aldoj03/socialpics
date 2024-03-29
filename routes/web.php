<?php
/* use App\Image; */

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
    /* $images = Image::all();
    foreach ($images as $key) {

        echo $key->user->name . '' . $key->user->surname . "<br>";
        echo $key->image_path . "<br>";
        echo $key->description . "<br>";

        if (count($key->coments) > 0) {
            echo "<h2>comentearios: </h2>";
            foreach ($key->coments as $coment) {
                echo $coment->content . ' --->' . $key->user->name . "<br>";

            }
        } else {
            echo "<h2>sin comentearios </h2>";
        }
        if (count($key->likes) > 0) {
            echo "<h2> likes: </h2>";
            echo count($key->likes).'-->';
                foreach ($key->likes as  $like ) {
                    echo $like->user->name.'**';
                }
        } else {
            echo "<h2>sin likes </h2>";
        }
        echo "<hr>";

    } */
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/configuracion', 'UserController@config')->name('config');
Route::post('/update', 'UserController@update')->name('user.update');
Route::get('/user/avatar/{filename}', 'UserController@getImage' )->name('user.avatar');
Route::get('/image-create', 'ImageController@create')->name('image.create');
Route::post('/image/save', 'ImageController@save')->name('image.save');
Route::get('/image/file/{filename}', 'ImageController@getImage' )->name('image.file');
Route::get('/image/{id}', 'ImageController@detail' )->name('image.detail');
Route::post('/comment/save', 'CommentController@save')->name('comment.save');
Route::get('/comment/delete/{id}', 'CommentController@delete')->name('comment.delete');
Route::get('/like/{image_id}', 'LikeController@like')->name('like.save');
Route::get('/dislike/{image_id}', 'LikeController@dislike')->name('like.delete');
Route::get('/countlikes/{image_id}', 'LikeController@countlikes')->name('like.count');
Route::get('/likes', 'LikeController@index')->name('likes.index');
Route::get('/profile/{id}', 'UserController@profile')->name('profile');
Route::get('/image/delete/{id}', 'ImageController@delete')->name('image.delete');
Route::get('/image/edit/{id}', 'ImageController@edit')->name('image.edit');
Route::post('/image/update', 'ImageController@update')->name('image.update');