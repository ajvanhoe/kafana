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

    if(!session()->has('locale')) {
        $lang = 'sr';
        session(['locale' => $lang]);
    } else {
        $lang = session('locale');
    }


    return view('welcome');
})->name('welcome');

/* Switch za jezik */
Route::get('setlocale/{locale}', function ($locale) {
  if (in_array($locale, config('app.locales'))) {
    App::setLocale($locale);
    session(['locale' => $locale]);
  }
  return redirect()->back();
})->name('set.locale');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
