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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    
    $comics = config('comics');
    
    $data = [
        'comics' => $comics
    ];
    
    return view('home', $data);

})->name('home');


Route::get('/single-component/{id}', function ($id) {
    
    $comics = config('comics');
    $this_comic = [];

    foreach($comics as $item){
        if($item['id'] == $id){
            $this_comic = $item;
        }
    };

    $data = [
        'this_comic' => $this_comic
    ];

    return view('single-component', 
    $data
);
})->name('single_component');