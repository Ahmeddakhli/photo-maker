<?php
  
 
  use App\Http\Controllers\HomeController;   
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SettingController;
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

Route::get('/mail', [ClientController::class, 'mail'])->name('/mail');
Route::get('/client', [ClientController::class, 'client'])->name('/client');
Route::get('/masseg', [ClientController::class, 'masseg'])->name('masseg');
Route::get('/ourservices', [HomeController::class, 'ourservices'])->name('ourservices');
Route::get('/admins', [HomeController::class, 'admins'])->name('admins');
Route::get('/addphoto', [PhotoController::class, 'addphoto'])->name('addphoto');

Route::get('/gallary', [PhotoController::class, 'gallary'])->name('gallery');
Route::get('/category/{id}', [PhotoController::class, 'category'])->name('category');
Route::get('/', [HomeController::class, 'front'])->name('/');
Route::get('/admin', [HomeController::class, 'wedgs'])->middleware(['auth'])->name('admin');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/slider', [HomeController::class, 'slider'])->name('slider');

Route::resource('clients', ClientController::class);
Route::resource('settings', SettingController::class);
Route::resource('photos', PhotoController::class);

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
