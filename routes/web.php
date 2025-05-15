<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ProductionResinController;
use App\Http\Controllers\ProductionResin2Controller;
use App\Http\Controllers\ProductionResin3Controller;
use App\Http\Controllers\ProductionPaintingController;
use App\Http\Controllers\ProductionPainting2Controller;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\KohosoController;
use App\Http\Controllers\BudgetController;


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
    Route::get('/productionresin', [ProductionResinController::class, 'indexResin'])->name('resin');
    Route::get('/productionresin2', [ProductionResin2Controller::class, 'index'])->name('productionresin2.index');
    Route::get('/productionresin3', [ProductionResin3Controller::class, 'index'])->name('productionresin3');
    Route::post('/productionresin3/store', [ProductionResin3Controller::class, 'store'])->name('productionresin3.store');
    Route::get('/productionresin3/{id}/edit', [ProductionResin3Controller::class, 'edit'])->name('productionresin3.edit');
    Route::put('/productionresin3/{id}', [ProductionResin3Controller::class, 'update'])->name('productionresin3.update');
    Route::delete('/productionresin3/{id}', [ProductionResin3Controller::class, 'destroy'])->name('productionresin3.destroy');
    Route::post('/abnormalities', [ProductionResin2Controller::class, 'storeAbnormality'])->name('abnormalities.store');
    Route::get('/productionpainting', [ProductionPaintingController::class, 'indexPainting'])->name('painting');
    Route::get('/productionpainting2', [ProductionPainting2Controller::class, 'indexPainting2'])->name('painting');
    Route::get('/kohoso', [KohosoController::class, 'index'])->name('kohoso.index');
    Route::post('/kohoso', [KohosoController::class, 'store'])->name('kohoso.store');
    Route::get('/kohoso/{kohoso}/edit', [KohosoController::class, 'edit'])->name('kohoso.edit');
    Route::put('/kohoso/{kohoso}', [KohosoController::class, 'update'])->name('kohoso.update');
    Route::delete('/kohoso/{kohoso}', [KohosoController::class, 'destroy'])->name('kohoso.destroy');    
    Route::get('/projectpreparation/addproject', function () {
        return view('pages/projectpreparation/addproject');
    })->name('add-project');
    Route::get('/projectpreparation/masterschedule', function () {
        return view('pages/projectpreparation/masterschedule');
    })->name('master-schedule');
    Route::get('/projectpreparation/documents', function () {
        return view('pages/projectpreparation/documents');
    })->name('documents');
    Route::post('/project', [ProjectController::class, 'store'])->name('project.store');
    Route::get('/projectpreparation/tooling', function () {
        return view('pages/projectpreparation/tooling');
    })->name('tooling');
    Route::get('/projectpreparation/processline', function () {
        return view('pages/projectpreparation/processline');
    })->name('process-line');
    Route::get('/finance/transactions', [TransactionController::class, 'index01'])->name('transactions');
    Route::get('/finance/transaction-details', [TransactionController::class, 'index02'])->name('transaction-details');
    Route::get('/job/job-post', function () {
        return view('pages/job/job-post');
    })->name('job-post');    
    Route::get('/job/company-profile', function () {
        return view('pages/job/company-profile');
    })->name('company-profile');
    Route::get('/messages', function () {
        return view('pages/messages');
    })->name('messages');
    Route::get('/gorika/gorikasection', function () {
        return view('pages.gorikaactivity.gorikasection');
    })->name('gorikasection');
    Route::get('/tasks/list', function () {
        return view('pages/tasks/tasks-list');
    })->name('tasks-list');  
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
    Route::get('/gorika/gorikasection', function () {
        return view('pages.gorikaactivity.gorikasection');
    })->name('gorikasection');  
    Route::get('/people/peopledev', function () {
        return view('pages.peopledevelopment.peopledev');
    })->name('peopledev');
    Route::get('/safety/safetyact', function () {
        return view('pages.safetyactivity.safetyact');
    })->name('safetyact');     
    Route::get('/utility/roadmap', function () {
        return view('pages/utility/roadmap');
    })->name('roadmap'); 
    Route::get('/utility/404', function () {
        return view('pages/utility/404');
    })->name('404');
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
    Route::get('/finance/transaction-details', [TransactionController::class, 'index02'])->name('transaction-details');
    
    // Budget routes
    Route::get('/budget', [BudgetController::class, 'index'])->name('budget.index');
    Route::post('/budget', [BudgetController::class, 'store'])->name('budget.store');
    Route::put('/budget/{budget}', [BudgetController::class, 'update'])->name('budget.update');
    Route::delete('/budget/{budget}', [BudgetController::class, 'destroy'])->name('budget.destroy');
    
    Route::get('/messages', function () {
        return view('pages/messages');
    })->name('messages');
});