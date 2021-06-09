<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\ShopController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;

use App\Models\Project;
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

Route::get('/cart', [ShopController::class, 'cart'])->middleware('auth'); 

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/guarange', [MainController::class, 'guarange']);

Route::get('/office', [ShopController::class, 'office'])->middleware('auth');

Route::get('/pageproject', function () {
    return view('pageproject');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/projects', [MainController::class, 'projects']);
Route::get('/project/{id}', [MainController::class, 'pageproject']);

Route::get('/blog',  [MainController::class, 'blog']);
Route::get('/blog/{id}',  [MainController::class, 'blog_show']);

Route::get('/', [MainController::class, 'index']);

Route::get('/company', [MainController::class, 'company']);

Route::get('/delivery', [MainController::class, 'delivery']);

Route::get('/partner', [MainController::class, 'partners']);

Route::get('/team', [MainController::class, 'team']);

Route::get('/subcategory/{id}', [ShopController::class, 'card']);

Route::get('/product/{id}', [ShopController::class, 'card_detail']);

Route::post('/cart-add', [ShopController::class, 'cart_add'])->middleware('auth');

Route::post('/add-order', [ShopController::class, 'add_order'])->middleware('auth');
Route::post('/password_change', [UserController::class, 'password_change'])->middleware('auth');

Route::get('/calc', function() {
    return view('calc');
});


Route::post('/request', function() {
    return redirect()->back();
});


Route::get('/search', function() {
    $projects = Project::all();
    $q = null;
    return view('search', compact('projects', 'q'));
});

Route::post('/search', function(Request $request) {
    $q = $request->q;
    $projects = Project::where('title', 'like', '%'.$q .'%')->get();
    return view('search', compact('projects', 'q'));
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';