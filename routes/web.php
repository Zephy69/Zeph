
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcomController;
use App\Models\Ecom;
use PhpParser\Node\Stmt\Echo_;

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
//     return view('welcome');
// });
// Route::get('/master', function () {
//     return view('admin.layouts.master');
// });
Route::get('/admin/dashboard',[EcomController::class,'index'])->name('showproduct');
Route::get('/admin/dashboard/create',[EcomController::class,'create'])->name('addproduct');
Route::post('/post',[EcomController::class,'store'])->name('saveproduct');
// Route::get('/product',[EcomController::class,'index'])->name('indexproduct');
Route::get('/proedit/{id}',[EcomController::class,'edit'])->name('editproduct');
Route::post('/proupddate/{id}',[EcomController::class,'update'])->name('updateproduct');
Route::get('/prodelete/{id}',[EcomController::class,'destroy'])->name('destroyproduct');