<?php

use Illuminate\Http\Request;
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
    $files= Storage::disk("google")->allFiles();
    //dd($files);
    return view('welcome',['files' => $files]);
});


Route::post('/upload', function (Request $request) {
    Storage::disk("google")->putFileAs("",$request->file("pdf"),"arquivo.pdf");
   
})->name('upload');
