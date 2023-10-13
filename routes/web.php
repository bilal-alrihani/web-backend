<?php

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

$list = [
    ['title' => 'title1', 'id' => 1, 'content' => 'content1'],
    ['title' => 'title2', 'id' => 2, 'content' => 'content2']
];
Route::get('/', function () {
    return view('welcome');
});
Route::get('/articles', function ()  use ($list){
    return $list;
});
Route::get('/articles/{id}', function ($id) use($list) {
    return array_filter($list, function ($q) use ($id) {
        return $q['id'] == $id;
    });
});
