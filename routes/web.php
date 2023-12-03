<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
  
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

// cache clear
Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
 });
//  cache clear
  
// Route::get('/', function () {
//     return view('welcome');
// });
  
Auth::routes();
Route::get('/home', [FrontendController::class, 'index'])->name('home');
Route::get('/', [FrontendController::class, 'index'])->name('homepage');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontendController::class, 'contactMessage'])->name('contact.submit');
Route::get('/facilities', [FrontendController::class, 'facilities'])->name('facilities');
Route::get('/parking', [FrontendController::class, 'parking'])->name('parking');
Route::get('/our-rates', [FrontendController::class, 'rates'])->name('rates');
Route::get('/offer', [FrontendController::class, 'offer'])->name('offer');
Route::get('/local-attraction', [FrontendController::class, 'location'])->name('location');
Route::get('/review-&-servey', [FrontendController::class, 'review'])->name('review');
Route::post('/review-&-servey', [FrontendController::class, 'serveyStore'])->name('survey.store');
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['prefix' =>'user/', 'middleware' => ['auth', 'is_user']], function(){
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['prefix' =>'manager/', 'middleware' => ['auth', 'is_manager']], function(){
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
 