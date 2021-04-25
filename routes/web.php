<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;

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


Route::get('/', [PagesController::class, 'welcomePage'])->name('home');
Route::get('/my_dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
Route::get('/my_dashboard/edit_main_section', [PagesController::class, 'show_main_section'])->name('dashboard.main_section');
Route::get('/my_dashboard/edit_service', [PagesController::class, 'show_edit_service'])->name('dashboard.edit_service');
Route::get('/my_dashboard/edit_aboutMe', [PagesController::class, 'show_edit_aboutMe'])->name('dashboard.edit_aboutMe');
Route::get('/my_dashboard/edit_contactMe', [PagesController::class, 'show_edit_contactMe'])->name('dashboard.edit_contactMe');
Route::get('/my_dashboard/edit_portfolio', [PagesController::class, 'show_edit_portfolio'])->name('dashboard.edit_portfolio');
Route::put('/my_dashboard/dashboard_mainSection', [PagesController::class, 'dashboard_mainSection'])->name('update.mainSection');
Route::get('/my_dashboard/service_create', [PagesController::class, 'dashboard_serviceSection'])->name('service_create');
Route::post('/my_dashboard/service_create', [PagesController::class, 'dashboard_serviceDataCreate'])->name('add_service');
Route::get('/my_dashboard/service_list', [PagesController::class, 'dashboard_serviceList'])->name('service_list');
Route::get('/my_dashboard/edit_service_list/{id}', [PagesController::class, 'dashboard_edit_serviceList'])->name('edit_service');
Route::put('/my_dashboard/update_service_list/{id}', [PagesController::class, 'dashboard_update_serviceList'])->name('update_service');
Route::delete('/my_dashboard/delete_service_list/{id}', [PagesController::class, 'dashboard_delete_serviceList'])->name('delete_service');



Route::get('/my_dashboard/portfolio_create', [PortfolioController::class, 'dashboard_portfolio_create'])->name('portfolio_create');
Route::get('/my_dashboard/portfolio_list', [PortfolioController::class, 'dashboard_portfolio_list'])->name('portfolio_list');
Route::post('/my_dashboard/portfolio_add', [PortfolioController::class, 'dashboard_portfolio_insert'])->name('insert_portfolio');

