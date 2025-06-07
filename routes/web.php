<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\UserModuleController;
use App\Http\Controllers\core\SystemRoleController;


// Route::middleware(['auth', 'verified'])->group( function () {
Route::get('/', function () {
    return view('welcome');
});
// });
// All users should be logged in and verified 


// GATES 

// Route::get('/entry', [EntryPointController::class, 'index']);
// Route::get('entry_point/login', [EntryPointController::class, 'login']);
// ADMIN FUNCTIONS 
Route::prefix('admin')->group(function () {
    Route::middleware(['auth', 'verified', 'isEmployee'])->group(function () {

        Route::controller(UserModuleController::class)->group(function () {
            Route::get('/perform', 'perform')->name('admin.perform.home');
            Route::get('/recruit', 'recruit')->name('admin.recruit.home');
            // Route::get('/system_role', 'system_role')->name('admin.personnel.home');
        });

    });
});


// NON-EMPLOYEE FUNCTIONS 
Route::middleware(['auth', 'verified'])->group(function () {

    
});
// Available Job Openings 
// Go to Recruitment module 



// EMPLOYEE FUNCTIONS 

Route::middleware(['auth', 'verified', 'isEmployee'])->group(function () {
    Route::controller(UserModuleController::class)->group(function () {
        // Route::get('/', 'core')->name('hr.home');
        Route::get('/core', 'core')->name('core.home');
        Route::get('/plan', 'plan')->name('plan.home');
        Route::get('/perform', 'perform')->name('perform.home');
        Route::get('/recruit', 'recruit')->name('recruit.home');
        Route::get('/learn', 'learn')->name('learn.home');
        Route::get('/personnel', 'personnel')->name('personnel.home');
        Route::get('/recognize', 'personnel')->name('recognize.home');
    });



});



// Log out 
// Route::post('entry_point/logout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::controller(SocialiteController::class)->group(function () {
    Route::get('auth/google', 'googleLogin')->name('auth.google');
    Route::get('auth/google-callback', 'googleAuthentication')->name('auth.google-callback');
    // Route::get('auth/facebook', 'facebookLogin')->name('auth.facebook');
    // Route::get('auth/facebook-callback', 'facebookAuthentication')->name('auth.facebook-callback');
});