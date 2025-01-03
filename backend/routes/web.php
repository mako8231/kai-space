<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PictureController;

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
    return ['Laravel' => app()->version()];
});

Route::get('/picture/{id}/', [PictureController::class, 'index']);

/**Route::get('/test', function(){
    return view('test');
});**/

require __DIR__ . '/auth.php';
