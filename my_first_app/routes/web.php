<?php

use App\Http\Controllers\Fallbackcontroller;
use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\poscontroller;
use App\Http\Controllers\Practisecontroller;
use App\Http\Controllers\test;



/*
    
*/

//Route::get('/', function () {
// return view('welcome');

//});



Route::prefix('/blog')->group(function () {
   Route::get('/create', [poscontroller::class, 'create'])->name('blog.create');
   Route::get('/', [poscontroller::class, 'index'])->name('blog.index');
   Route::get('/{id}', [poscontroller::class, 'show'])->name('blog.show');
   
   Route::post('/{id}', [poscontroller::class, 'store'])->name('blog.store');
   Route::get('/edit/{id}', [poscontroller::class, 'edit'])->name('blog.edit');
   Route::patch('/1', [poscontroller::class, 'update'])->name('blog.update');
   Route::delete('/{id}', [poscontroller::class, 'destroy'])->name('blog.destroy');
});
//route for invoke method

Route::get('/', Homecontroller::class);
//Route:: resource('blog', poscontroller::class);

//multiple http verbs
//Route::any('/blog',[poscontroller::class, 'index']);
//return view
//Route:: view('/blog', 'blog.index', ['name'=> 'code with Brian ']);
//Route:: match(['GET','POST'], '/blog', [poscontroller::class,'index']);

//Route:: resource('blog', poscontroller::class);


Route::get('/', function () {
   return view('index');
});

Route::get('/welcome', [Practisecontroller::class, 'index']) -> name('welcome');
//fallback route
Route::fallback(Fallbackcontroller::class);
