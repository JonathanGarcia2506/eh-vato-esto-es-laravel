<?php

use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function() {
//     return view('welcome');
// });
Route::resource('post', PostController::class);

// Route::get('post',[PrimerControlador::class, 'index']);
// Route::get('post/{post}', [PrimerControlador::class, 'show']);
// Route::get('post/create',[PrimerControlador::class, 'create']);
// Route::get('post/{post}/edit',[PrimerControlador::class, 'edit']);

// Route::post('post', [PrimerControlador::class, 'store']);
// Route::put('post/{post}',[PrimerControlador::class, 'update']);
// Route::delete('post/{post}',[PrimerControlador::class, 'destroy']);

// Route::get('test', [PrimerControlador::class, 'index']);
// Route::get('otro/{post}/{otro?}', [PrimerControlador::class, 'otro']);


// Route::get('/contact', function() {
//     // Diferentes  tipos de redireccionar 
//     // return redirect('/contact2', 303);
//     // return redirect()->route('contact2');
//     // return to_route('contact2');

//     return view('contact',  ['name' => 'tilina', 'age' => '33']);
// })->name('contact');

// Route::get('/contact2', function() {
//     $datam = ['nameM' => 'tilin', 'ageM' => '19'];
//     return view('contact2', $datam);
// })->name('contact2'); 
