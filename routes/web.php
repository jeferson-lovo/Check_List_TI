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
    return view('index1');
})->name('index');

Route::get('/log', function () {
    return view('login');
})->name('login');

Route::get('/novockl', function () {
    return view('chekList');
})->name('NovoCKL');

Route::get('/chamados', function () {
    return view('chamados');
})->name('chamados');

Route::get('/inventario', function () {
    return view('inventario');
})->name('inventario');
