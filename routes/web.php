<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ComproController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => ''], function () {
    Route::get('/', [ComproController::class, 'compro']);
    Route::post('/email', [ComproController::class, 'sendEmail']);
  });

Route::get('/login', [AuthController::class, 'login']);
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::get('/logout',[AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'dashboard']);

Route::get('/user', [UserController::class, 'user']);
Route::get('/user/create',[UserController::class, 'create']);
Route::post('/user/create/store',[UserController::class, 'store']);
Route::get('/user/{id}/edit',[UserController::class, 'edit']);
Route::post('/user/{id}/update',[UserController::class, 'update']);
Route::get('/user/{id}/delete',[UserController::class, 'delete']);

Route::get('/portofolio', [PortofolioController::class, 'portofolio']);
Route::get('/portofolio/create',[PortofolioController::class, 'create']);
Route::post('/portofolio/create/store',[PortofolioController::class, 'store']);
Route::get('/portofolio/{id}/edit',[PortofolioController::class, 'edit']);
Route::post('/portofolio/{id}/update',[PortofolioController::class, 'update']);
Route::get('/portofolio/{id}/delete',[PortofolioController::class, 'delete']);
Route::get('/portofolio/{id}/isactive',[PortofolioController::class, 'isActive']);

Route::get('/partner', [PartnerController::class, 'partner']);
Route::get('/partner/create',[PartnerController::class, 'create']);
Route::post('/partner/create/store',[PartnerController::class, 'store']);
Route::get('/partner/{id}/edit',[PartnerController::class, 'edit']);
Route::post('/partner/{id}/update',[PartnerController::class, 'update']);
Route::get('/partner/{id}/delete',[PartnerController::class, 'delete']);
Route::get('/partner/{id}/isactive',[PartnerController::class, 'isActive']);

Route::get('/team', [TeamController::class, 'team']);
Route::get('/team/create',[TeamController::class, 'create']);
Route::post('/team/create/store',[TeamController::class, 'store']);
Route::get('/team/{id}/edit',[TeamController::class, 'edit']);
Route::post('/team/{id}/update',[TeamController::class, 'update']);
Route::get('/team/{id}/delete',[TeamController::class, 'delete']);
Route::get('/team/{id}/isactive',[TeamController::class, 'isActive']);

Route::get('/type', [TypeController::class, 'type']);
Route::get('/type/create',[TypeController::class, 'create']);
Route::post('/type/create/store',[TypeController::class, 'store']);
Route::get('/type/{id}/edit',[TypeController::class, 'edit']);
Route::post('/type/{id}/update',[TypeController::class, 'update']);
Route::get('/type/{id}/delete',[TypeController::class, 'delete']);

Route::get('/info', [InfoController::class, 'info']);
Route::get('/info/create',[InfoController::class, 'create']);
Route::post('/info/create/store',[InfoController::class, 'store']);
Route::get('/info/{id}/edit',[InfoController::class, 'edit']);
Route::post('/info/{id}/update',[InfoController::class, 'update']);
Route::get('/info/{id}/delete',[InfoController::class, 'delete']);
Route::get('/info/{id}/isactive',[InfoController::class, 'isActive']);

Route::get('/testimoni', [TestimoniController::class, 'testimoni']);
Route::get('/testimoni/create',[TestimoniController::class, 'create']);
Route::post('/testimoni/create/store',[TestimoniController::class, 'store']);
Route::get('/testimoni/{id}/edit',[TestimoniController::class, 'edit']);
Route::post('/testimoni/{id}/update',[TestimoniController::class, 'update']);
Route::get('/testimoni/{id}/delete',[TestimoniController::class, 'delete']);
Route::get('/testimoni/{id}/isactive',[TestimoniController::class, 'isActive']);

Route::get('/service', [ServiceController::class, 'service']);
Route::get('/service/create',[ServiceController::class, 'create']);
Route::post('/service/create/store',[ServiceController::class, 'store']);
Route::get('/service/{id}/edit',[ServiceController::class, 'edit']);
Route::post('/service/{id}/update',[ServiceController::class, 'update']);
Route::get('/service/{id}/delete',[ServiceController::class, 'delete']);
Route::get('/service/{id}/isactive',[ServiceController::class, 'isActive']);

Route::get('/file', [FileController::class, 'file']);
Route::get('/file/create',[FileController::class, 'create']);
Route::post('/file/create/store',[FileController::class, 'store']);
Route::get('/file/{id}/edit',[FileController::class, 'edit']);
Route::post('/file/{id}/update',[FileController::class, 'update']);
Route::get('/file/{id}/delete',[FileController::class, 'delete']);
Route::get('/file/{id}/isactive',[FileController::class, 'isActive']);
