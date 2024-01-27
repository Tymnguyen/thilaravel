<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\Demo2Controller;
use App\Http\Controllers\Demo3Controller;
use App\Http\Controllers\Demo4Controller;
use App\Http\Controllers\Demo5Controller;
use App\Http\Controllers\Demo6Controller;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\StudentController;
use App\Models\Orders;
use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

route::get('/demo', [DemoController::class, 'index']);
route::get('/demo2', [DemoController::class, 'index2']);
route::get('/demo3', [DemoController::class, 'index3']);

route::get('/demo2/index2', [Demo2Controller::class, 'index2']);
route::group([], function(){
    Route::get('/',[Demo3Controller::class, 'index']);
    Route::get('/demo3',[Demo3Controller::class, 'index']);
});
// một là bỏ đường dẫn rỗng hay là thêm / để dẫn đường dan vào trong

Route::group(['prefix' => 'demo4'],function(){
    Route::get('/',[Demo4Controller::class, 'index']);
    Route::get('/index',[Demo4Controller::class, 'index']);
    Route::get('/index2/{id}',[Demo4Controller::class, 'index2']);
    Route::get('/index3/{id}/{username}',[Demo4Controller::class, 'index3']);
    Route::get('/index4',[Demo4Controller::class, 'index4']);
});

// File này định nghĩa các đường dẫn để gọi vào controller

Route::group(['namespace' => 'Admin','prefix' => 'admin'],function(){

    Route::group(['prefix'=>'dashboard'],function(){

        Route::get('/', [DashboardController::class,'index']);
        //http:://localhost:8000/admin/dashboard/index
        Route::get('/index', [DashboardController::class,'index']);
    });
    // khai route cho invoice
    Route::group(['prefix'=>'invoice'],function(){
        Route::get('/',[InvoiceController::class,'index']);
        Route::get('/index',[InvoiceController::class,'index']);
        Route::get('/index2/{id}',[InvoiceController::class,'index2']);
    });
});

Route::group(['prefix'=>'demo5'],function(){
    Route::get('/index',[Demo5Controller::class, 'index']);
    Route::get('/searchByKeyword',[Demo5Controller::class, 'SearchByKeyword']);
    Route::post('/login',[Demo5Controller::class, 'login']);
    Route::post('/upload',[Demo5Controller::class, 'upload']);
    Route::post('/uploads',[Demo5Controller::class, 'uploads']);
});
Route::group(['prefix'=>'account'],function(){
    Route::get('/login',[AccountController::class, 'login']);
    Route::get('/welcome',[AccountController::class, 'welcome']);
    Route::post('/process-login',[AccountController::class, 'processLogin']);
    Route::get('/logout',[AccountController::class, 'logout']);
});

Route::group(['prefix'=>'home'],function(){
    Route::get('/index',[HomeController::class, 'index']);
});
Route::group(['prefix'=>'news'],function(){
    Route::get('/index',[NewsController::class, 'index']);
});
Route::group(['prefix'=>'aboutus'],function(){
    Route::get('/index',[AboutUsController::class, 'index']);
});
Route::group(['prefix'=>'demo6'],function(){
    Route::get('/',[Demo6Controller::class, 'index']);
    Route::get('/index',[Demo6Controller::class, 'index']);
    Route::get('/index22',[Demo6Controller::class, 'index22']);
    Route::get('/index23',[Demo6Controller::class, 'index23']);
    Route::get('/index17',[Demo6Controller::class, 'index17']);
    Route::get('/index18',[Demo6Controller::class, 'index18']);
    Route::get('/index19',[Demo6Controller::class, 'index19']);
    Route::get('/index20',[Demo6Controller::class, 'index20']);
    Route::get('/index21',[Demo6Controller::class, 'index21']);
});
Route::group(['prefix'=>'student'],function(){
    Route::get('/',[StudentController::class, 'index']);
    Route::get('/index',[StudentController::class, 'index']);
    Route::get('/details/{id}',[StudentController::class, 'details']);
    Route::get('/searchByKeyword',[StudentController::class, 'searchByKeyword']);
    Route::get('/add',[StudentController::class, 'add']);
    Route::get('/delete/{id}',[StudentController::class, 'delete']);
    Route::get('/edit/{id}',[StudentController::class, 'edit']);


    Route::post('/save',[StudentController::class, 'save']);
    Route::post('/update',[StudentController::class, 'update']);
});
Route::group(['prefix'=>'customer'],function(){
    Route::get('/',[CustomerController::class, 'index']);
    Route::get('/index',[CustomerController::class, 'index']);
    Route::get('/searchByKeyword',[CustomerController::class, 'searchByKeyword']);
    Route::get('/searchByKeyorders',[CustomerController::class, 'searchByKeyorders']);
    Route::get('/orders/{id}',[CustomerController::class, 'orders']);
    Route::get('/add',[CustomerController::class, 'add']);
    Route::get('/delete/{id}',[CustomerController::class, 'delete']);
    Route::get('/edit',[CustomerController::class, 'edit']);
    Route::get('/timkiem',[CustomerController::class, 'timkiem']);

    Route::post('/save',[CustomerController::class, 'save']);
    
});
Route::group(['prefix'=>'orders'],function(){
    Route::get('/',[OrdersController::class, 'index']);
    Route::get('/index',[OrdersController::class, 'index']);
    Route::get('/addorders/{customerid}',[OrdersController::class, 'addorders']);
    Route::get('/edit/{id}',[OrdersController::class, 'edit']);
    Route::get('/searchByOrders',[OrdersController::class, 'searchByOrders']);
    Route::get('/delete/{customerid}-{id}',[OrdersController::class, 'delete']);


    Route::post('/update',[OrdersController::class, 'update']);
    Route::post('/save',[OrdersController::class, 'save']);
    
});