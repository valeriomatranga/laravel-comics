<?php

use Illuminate\Support\Facades\Route;

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
    return view('characters.index');
});

Route::get('/characters', function () {
    return view('characters.index');
})->name('characters');

/* comics */
Route::get('/comics', function () {
    $comics = config('comics.data');
    //ddd($comics);
    return view('comics.index', compact('comics'));
})->name('comics');

Route::get('comics/{id}', function($id){
    $comics = config('comics.data');
    //ddd($comics[$id]);
    if(is_numeric($id) && $id < count($comics) && $id >= 0){

        $comic = $comics[$id];
        return view('comics.show', compact('comic'));
    }else{
        abort(404);
    }
})->name('comic');
/* /comics */

Route::get('/movies', function () {
    return view('movies.index');
})->name('movies');

Route::get('/tv', function () {
    return view('tv.index');
})->name('tv');

Route::get('/games', function () {
    return view('games.index');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles.index');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos.index');
})->name('videos');

Route::get('/fans', function () {
    return view('fans.index');
})->name('fans');

Route::get('/news', function () {
    return view('news.index');
})->name('news');

Route::get('/shop', function () {
    return view('shop.index');
})->name('shop');


