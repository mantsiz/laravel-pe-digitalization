<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductionResin;
use App\Http\Controllers\ProductionResin2;
use App\Http\Controllers\ProductionResin3Controller;
use App\Http\Controllers\ProductionPaintingController;
use App\Http\Controllers\ProductionPainting2Controller;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CampaignController;


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

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/analytics', [DashboardController::class, 'analytics'])->name('analytics');
    Route::get('/dashboard/fintech', [DashboardController::class, 'fintech'])->name('fintech');
    Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance');
    Route::post('/attendance/store', [AttendanceController::class, 'store'])->name('attendance.store');
    Route::get('/attendance/{id}/edit', [AttendanceController::class, 'edit'])->name('attendance.edit');
    Route::put('/attendance/{id}', [AttendanceController::class, 'update'])->name('attendance.update');
    Route::delete('/attendance/{id}', [AttendanceController::class, 'destroy'])->name('attendance.destroy');
    Route::get('/ecommerce/shop', function () {
        return view('pages/ecommerce/shop');
    })->name('shop');    
    Route::get('/ecommerce/shop-2', function () {
        return view('pages/ecommerce/shop-2');
    })->name('shop-2');     
    Route::get('/ecommerce/product', function () {
        return view('pages/ecommerce/product');
    })->name('product');
    Route::get('/ecommerce/cart', function () {
        return view('pages/ecommerce/cart');
    })->name('cart');    
    Route::get('/ecommerce/cart-2', function () {
        return view('pages/ecommerce/cart-2');
    })->name('cart-2');    
    Route::get('/ecommerce/cart-3', function () {
        return view('pages/ecommerce/cart-3');
    })->name('cart-3');    
    Route::get('/ecommerce/pay', function () {
        return view('pages/ecommerce/pay');
    })->name('pay');     
    Route::get('/campaigns', [CampaignController::class, 'index'])->name('campaigns');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders');
    Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices');
    Route::get('/productionresin', [ProductionResin::class, 'indexResin'])->name('resin');
    Route::get('/productionresin2', [ProductionResin2::class, 'index'])->name('productionresin2.index');
    Route::get('/productionresin3', [ProductionResin3Controller::class, 'index'])->name('productionresin3');
    Route::post('/productionresin3/store', [ProductionResin3Controller::class, 'store'])->name('productionresin3.store');
    Route::get('/productionresin3/{id}/edit', [ProductionResin3Controller::class, 'edit'])->name('productionresin3.edit');
    Route::put('/productionresin3/{id}', [ProductionResin3Controller::class, 'update'])->name('productionresin3.update');
    Route::delete('/productionresin3/{id}', [ProductionResin3Controller::class, 'destroy'])->name('productionresin3.destroy');
    Route::post('/abnormalities', [ProductionResin2::class, 'storeAbnormality'])->name('abnormalities.store');
    Route::get('/productionpainting', [ProductionPaintingController::class, 'indexPainting'])->name('painting');
    Route::get('/productionpainting2', [ProductionPainting2Controller::class, 'indexPainting2'])->name('painting');
    Route::get('/community/profile', function () {
        return view('pages/community/profile');
    })->name('profile');
    Route::get('/community/feed', function () {
        return view('pages/community/feed');
    })->name('feed');     
    Route::get('/community/forum', function () {
        return view('pages/community/forum');
    })->name('forum');
    Route::get('/community/forum-post', function () {
        return view('pages/community/forum-post');
    })->name('forum-post');    
    Route::get('/community/meetups', function () {
        return view('pages/community/meetups');
    })->name('meetups');    
    Route::get('/community/meetups-post', function () {
        return view('pages/community/meetups-post');
    })->name('meetups-post');    
    Route::get('/finance/cards', function () {
        return view('pages/finance/credit-cards');
    })->name('credit-cards');
    Route::get('/finance/transactions', [TransactionController::class, 'index01'])->name('transactions');
    Route::get('/finance/transaction-details', [TransactionController::class, 'index02'])->name('transaction-details');
    Route::get('/job/job-listing', [JobController::class, 'index'])->name('job-listing');
    Route::get('/job/job-post', function () {
        return view('pages/job/job-post');
    })->name('job-post');    
    Route::get('/job/company-profile', function () {
        return view('pages/job/company-profile');
    })->name('company-profile');
    Route::get('/messages', function () {
        return view('pages/messages');
    })->name('messages');
    Route::get('/tasks/kanban', function () {
        return view('pages/tasks/tasks-kanban');
    })->name('tasks-kanban');
    Route::get('/tasks/list', function () {
        return view('pages/tasks/tasks-list');
    })->name('tasks-list');       
    Route::get('/inbox', function () {
        return view('pages/inbox');
    })->name('inbox'); 
    Route::get('/calendar', function () {
        return view('pages/calendar');
    })->name('calendar'); 
    Route::get('/settings/account', function () {
        return view('pages/settings/account');
    })->name('account');  
    Route::get('/settings/notifications', function () {
        return view('pages/settings/notifications');
    })->name('notifications');  
    Route::get('/settings/apps', function () {
        return view('pages/settings/apps');
    })->name('apps');
    Route::get('/settings/plans', function () {
        return view('pages/settings/plans');
    })->name('plans');      
    Route::get('/settings/billing', function () {
        return view('pages/settings/billing');
    })->name('billing');  
    Route::get('/settings/feedback', function () {
        return view('pages/settings/feedback');
    })->name('feedback');
    Route::get('/utility/changelog', function () {
        return view('pages/utility/changelog');
    })->name('changelog');  
    Route::get('/utility/roadmap', function () {
        return view('pages/utility/roadmap');
    })->name('roadmap');  
    Route::get('/utility/faqs', function () {
        return view('pages/utility/faqs');
    })->name('faqs');  
    Route::get('/utility/empty-state', function () {
        return view('pages/utility/empty-state');
    })->name('empty-state');  
    Route::get('/utility/404', function () {
        return view('pages/utility/404');
    })->name('404');
    Route::get('/utility/knowledge-base', function () {
        return view('pages/utility/knowledge-base');
    })->name('knowledge-base');
    Route::get('/kohoso', function () {
        return view('pages/documents/kohoso');
    })->name('kohoso');   
    Route::get('/joken', function () {
        return view('pages/documents/joken');
    })->name('joken');   
    Route::get('/history-problem', function () {
        return view('pages/documents/history-problem');
    })->name('history-problem');   
    Route::get('/gorika', function () {
        return view('pages/documents/gorika');
    })->name('gorika');
    Route::get('/component/button', function () {
        return view('pages/component/button-page');
    })->name('button-page');
    Route::get('/component/form', function () {
        return view('pages/component/form-page');
    })->name('form-page');
    Route::get('/component/dropdown', function () {
        return view('pages/component/dropdown-page');
    })->name('dropdown-page');
    Route::get('/component/alert', function () {
        return view('pages/component/alert-page');
    })->name('alert-page');
    Route::get('/component/modal', function () {
        return view('pages/component/modal-page');
    })->name('modal-page'); 
    Route::get('/component/pagination', function () {
        return view('pages/component/pagination-page');
    })->name('pagination-page');
    Route::get('/component/tabs', function () {
        return view('pages/component/tabs-page');
    })->name('tabs-page');
    Route::get('/component/breadcrumb', function () {
        return view('pages/component/breadcrumb-page');
    })->name('breadcrumb-page');
    Route::get('/component/badge', function () {
        return view('pages/component/badge-page');
    })->name('badge-page'); 
    Route::get('/component/avatar', function () {
        return view('pages/component/avatar-page');
    })->name('avatar-page');
    Route::get('/component/tooltip', function () {
        return view('pages/component/tooltip-page');
    })->name('tooltip-page');
    Route::get('/component/accordion', function () {
        return view('pages/component/accordion-page');
    })->name('accordion-page');
    Route::get('/component/icons', function () {
        return view('pages/component/icons-page');
    })->name('icons-page');
    Route::fallback(function() {
        return view('pages/utility/404');
    });    
});