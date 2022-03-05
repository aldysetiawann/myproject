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
// Route::get('/coba1', function () {
//     return view('coba1');
// });
// Route::get('/coba2', function () {
//     return view('coba2');
// });


// Route::get('user/{name?}', function ($name='John') {
//     return $name;
// });

// Route::get($uri, $callback())


// week 2 belajar simple routing.
Route::get('/', function () {
    return view('welcome'); // welcome ini nama file .bladenya
});

Route::get('foo', function () {
    return view('foo'); // 'foo' ini nama file .bladenya
});

Route::get('greeting/{name?}', function ($name = 'Samantha') {
    return view('foo', ['pname' => $name]);
});

// Route::get('user', function () {
//     return 'UserKosong';
// });

Route::get('katalog', function () {
    return view('katalog');
});

Route::get('katalog/medicine', function ($medicine = 'Medicine') {
    return view('medicines', ['medicine' => $medicine]);
});

Route::get('katalog/medicine/{id?}', function ($id) {

    return view('detail', ['id' => $id]);
});

Route::get('katalog/medequip', function ($medequip = 'Medical Equipment') {
    return view('medequip', ['medequip' => $medequip]);
});

Route::get('katalog/medequip/{id?}', function ($id) {
    return view('detailmedquip', ['id' => $id]);
});


Route::get('user/{name?}', function ($name = 'Aldy') {
    return 'User name : ' . $name;
});
// kalo ada tanda '?' di routenya, datanya mengikuti function.
Route::get('perkalian/{a1?}/{a2?}', function ($a1 = 0, $a2 = 0) {
    return view('foo', ['a1' => $a1, 'a2' => $a2]);
});

// Route::get('user/{id}/{nama}', function ($id, $nama) {
//     return 'User ' . $id . " Dengan Nama : " . $nama;
// });
