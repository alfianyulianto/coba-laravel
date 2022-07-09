<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StudentsController;

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

// callback anonimus function
// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/about', function () {
//     $nama = 'Alfian Yulianto';
//     return view('about', [
//         'nama' => $nama,
//     ]);
// });

// callback controller
Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// Route::get('/students', [StudentsController::class, 'index']);
// Route::post('/students', [StudentsController::class, 'store']);
// Route::get('/students/create', [StudentsController::class, 'create']);
// Route::get('/students/{student}', [StudentsController::class, 'show']);
// Route::delete('/students/{student}', [StudentsController::class, 'destroy']);
// Route::get('/students/{student}/edit', [StudentsController::class, 'edit']);
// Route::put('/students/{student}', [StudentsController::class, 'update']);
Route::resource('students', StudentsController::class);
