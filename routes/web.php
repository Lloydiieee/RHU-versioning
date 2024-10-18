<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return redirect('/prenatal');
    });

    Route::get('/development/{id}', function ($id) {
        return view('development');
    });
    
    Route::get('/prenatal',[InfoController::class, 'index']);
    Route::get('/prenatal/registration',[InfoController::class, 'registration']);

    Route::get('/prenatal/details',[InfoController::class, 'details']);
    Route::post('/info/added',[InfoController::class, 'store'])->name('info.save');

    Route::get('/prenatal/health',[InfoController::class, 'health']);
    Route::post('/prenatal/health/added',[InfoController::class, 'health_store'])->name('health.save');

    Route::get('/prenatal/risk',[InfoController::class, 'risk']);
    Route::post('/prenatal/risk/added',[InfoController::class, 'risk_store'])->name('risk.save');

    Route::get('/prenatal/history',[InfoController::class, 'history']);
    Route::post('/prenatal/history/added',[InfoController::class, 'history_store'])->name('history.save');

    Route::get('/prenatal/tetanus-toxoid',[InfoController::class, 'tetanus_toxoid']);
    Route::post('/prenatal/tetanus-toxoid/added',[InfoController::class, 'tetanus_toxoid_store'])->name('tetanus-toxoid.save');

    Route::get('/prenatal/vaccination',[InfoController::class, 'vaccination']);
    Route::post('/prenatal/vaccination/added',[InfoController::class, 'vaccination_store'])->name('vaccination.save');
});
