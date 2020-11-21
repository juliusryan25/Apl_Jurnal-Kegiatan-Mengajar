<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrintPdf;

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
    return view('index');
});
Route::get('/admin/print/a_j',  [PrintPdf::class, 'c_all_jurnal_pdf']);
Route::get('/print/s_j/{id}',  [PrintPdf::class, 'c_one_jurnal_pdf']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


