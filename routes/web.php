<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PermissionController;
use App\Models\OrderColorQuantity;

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
  
// Route::get('/', function () {
//     // return view('welcome');

// });

Route::get('/storage/link', function () {
    \Artisan::call('storage:link');

});

Route::get('/', [WelcomeController::class, 'welcome'])
->name('welcome.welcome');

  
Auth::routes();
  


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['middleware' =>['auth','role:subscriber'],'prefix' => 'mypanel'], function () {

//     Route::get('subscription/dashboard/subscription/{subscription}', [
//         'uses' =>'Subscirber\UserSubscriberDashboardController@subscriptionDashboard',
//         'as' => 'user.subscriptionDashboard'
//     ]);
// });  
  
Route::group(['middleware' => ['auth'],'prefix' => 'author'], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::get('users/edit/password', [UserController::class,'editPassword'])->name('editPassword');
    Route::post('users/{user}/change/password', [UserController::class,'changePassword'])->name('changePassword');
    Route::post('users/{user}/reset/password', [UserController::class,'resetPassword'])->name('resetPassword');


    Route::resource('buyers', BuyerController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('orders', OrderController::class);

    Route::get('orders/search/ajax/type/{type}/status/{status?}',[OrderController::class, 'searchAjax'])->name('searchAjax');
    Route::get('orders/by/buyer/{buyer}', [OrderController::class,'buyerOrder'])->name('buyerOrdersList');
    Route::get('edit/planned/order/{order}',[OrderController::class,'editPlannedOrder'])->name('editPlannedOrder');

    Route::get('orders/create/order/{order}',[OrderController::class,'editOrder'])->name('newOrder');
    Route::patch('orders/update/order/{order}',[OrderController::class,'updateOrder'])->name('update.order');
    Route::get('orders/quantitywise/all',[OrderController::class,'quantityWiseOrder'])->name('orders.latest');
    // Route::get('edit/quantitywise/order/{order}',[OrderController::class,'editQuantityWiseOrder'])->name('orders.editQuantityWiseOrder');
    Route::get('delete/color/wise/order/{order}/quantity/color/{color}',[OrderController::class,'colorWiseOrderDelete'])->name('colorwiseqtu.delete');
    // Route::post('orders/quantitywise/update',[OrderController::class,'updateQuantityWiseOrder'])->name('orders.latest.update');
});

Route::group(['middleware' => ['role:Admin']], function () {
    
    Route::get('admin/dashboard', [HomeController::class, 'adminDashboard'])
    ->name('admin.dashboard');
});

Route::group(['middleware' => ['role:Merchandiser']], function () {
    Route::get('merchandiser/dashboard', [HomeController::class, 'merchandiserDashboard'])
    ->name('merchandiser.dashboard');
});


Route::group(['middleware' => ['role:Product_Store']], function () {
    Route::get('product-store/dashboard',[HomeController::class,'productStoreDashboard'])->name('product_store.dashboard');

});