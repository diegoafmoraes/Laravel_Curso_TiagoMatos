<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\AdminProductController;

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

/*Route::get('/', function () {
    return view('home');
});*/
// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Product
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product');

// ROTAS DE ADMIN
Route::get('/admin/products', [AdminProductController::class, 'index'])->name('admin.prooducts');
Route::get('/admin/products/edit', [AdminProductController::class, 'edit'])->name('admin.prooducts.edit');

/*
// Faz roteamento para querystrings e tal..."?var=valor1&var2=val2.......
Route::get('/request', function(\Illuminate\Http\Request $request){ 
    
    $r = $request->query('keyword');

    dd($r);
});

// Pegar por campo alternativo (nesse caso, :token)
Route::get('/user/{user:chave}', function (\App\Models\User $user) {
    // dd($user);
    return $user;
}); 

// Pegar pela ID
Route::get('/user/{user}', function (\App\Models\User $user) {
    // dd($user);
    return $user;
}); 

Route::get('/', function () {
    return view('welcome');
    return [
        'first_name' => 'John Snow',
    ]; 
});
*/