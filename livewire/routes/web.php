<?php
use App\Models\Comment;
use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     $comment= Comment::all();
//     return view('welcome',compact('comment'));
// });


Route::view('/','home')->name('home')->middleware('auth');

Route::group(['middleware'=>'guest'],function(){
    Route::view('/login','login')->name('login');
    Route::view('/register','register');
    
});

