<?php
use App\Http\Controllers\RC;
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

Route::get('/', [RC::class,'home'])->name('home');
Route::get('/about', [RC::class,'about'])->name('about');
Route::get('/contact', [RC::class,'contact'])->name('contact');
Route::get('/catigoures', [RC::class,'catigoures'])->name('catigoures');
Route::get('/new', [RC::class,'new'])->name('new');
Route::get('/car', [RC::class,'car'])->name('car');
Route::get('/mov', [RC::class,'mov'])->name('mov');
Route::get('/rest', [RC::class,'rest'])->name('rest');
Route::get('/book', [RC::class,'book'])->name('book');
Route::post('/add', [RC::class,'add']);




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
