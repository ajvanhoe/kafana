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

/* welcome */
Route::get('/', function () {

    if(!session()->has('locale')) {
        $lang = 'sr';
        session(['locale' => $lang]);
    } else {
        $lang = session('locale');
    }
    return view('welcome');
})->name('welcome');

/* menu */
Route::get('/menu', function() {

  $path = public_path('pdf/gradimir-komplet.pdf');
  if(file_exists($path)) {
    return response()->download($path);
  }
  return redirect()->back();
  
})->name('menu');


/* Switch za jezik */
Route::get('setlocale/{locale}', function ($locale) {
  if (in_array($locale, config('app.locales'))) {
    App::setLocale($locale);
    session(['locale' => $locale]);
  }
  return redirect()->back();
})->name('set.locale');


Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');
