<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;

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
//     $page_title='Project Management';
//     return view('home',compact('page_title'));
// });

Route::get('/', [ProductsController::class, 'index'])->name('index');

Route::get('/auth', [HomeController::class, 'index'])->name('auth');

Route::post('/logout', 'HomeController@logout')->name('logout.custom');

Route::post('/checklogin', [HomeController::class, 'checklogin'])->name('checklogin');

Route::middleware('auth.check')->group(function () {
    Route::group(['prefix' => 'user'], function () {
        Route::get('/getUsers', [UsersController::class, 'getUsers'])->name('getUsers');
        
        Route::get('/addUsers', [UsersController::class, 'addUsers'])->name('addUser');
        
        
        Route::get('/editUsers/{id}', [UsersController::class, 'editUsers'])->name('editUser');
        
        Route::POST('/updateUsers/{id}', [UsersController::class, 'updateUsers'])->name('updateUser');

        Route::Post('/submitUser', [UsersController::class, 'submitUser'])->name('submitUser');
        
        Route::get('/deleteUsers/{id}', [UsersController::class, 'deleteUsers'])->name('deleteUser');
    });
});
Route::middleware('auth.check')->group(function () {
    Route::group(['prefix' => 'products'], function () {
        
        Route::get('/getProducts', [ProductsController::class, 'getProducts'])->name('getProducts');

        Route::get('/editProducts/{id}', [ProductsController::class, 'editProducts'])->name('editProduct');

        Route::get('/addProduct', [ProductsController::class, 'addProduct'])->name('addProduct');

        Route::Post('/submitProduct', [ProductsController::class, 'submitProduct'])->name('submitProduct');
        
        Route::Post('/updateProduct/{id}', [ProductsController::class, 'updateProduct'])->name('updateProduct');
        
        Route::get('/deleteProduct/{id}', [ProductsController::class, 'deleteProduct'])->name('deleteProduct');
    });
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/reset', function () {
    try {
        \Artisan::call('optimize');
        echo "First Optimization completed.\n";
        // Generate application key
        \Artisan::call('key:generate');
        echo "Application key generated successfully.\n";

        // Clear configuration cache
        \Artisan::call('config:cache');
        echo "Configuration cache cleared.\n";

    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n"; 
    }
   });


Route::get('/refresh', function () {
    \Artisan::call('migrate:fresh');
    echo "Database migration refreshed.\n";
    \Artisan::call('migrate');
    echo "Database migration done.\n";
    \Artisan::call('db:seed', ['--class' => 'UserSeeder']);
    \Artisan::call('db:seed', ['--class' => 'ProductsSeeder']);
        echo "Seeders executed.\n";
})->name('refresh');

