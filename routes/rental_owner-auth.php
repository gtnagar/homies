<?php

use App\Http\Controllers\Rental_Owner\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Rental_Owner\Auth\RegisteredUserController;
use App\Http\Controllers\Rental_Owner\BedAssignConntroller;
use App\Http\Controllers\Rental_Owner\BedManagement;
use App\Http\Controllers\Rental_Owner\ProfileController;
use App\Http\Controllers\Rental_Owner\RoomManagement;
use App\Http\Controllers\Rental_Owner\TenantprofileController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:rental_owner')->prefix('rental_owner')->name('rental_owner.')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth:rental_owner')->prefix('rental_owner')->name('rental_owner.')->group(function () {
    
    Route::get('/dashboard', function () {
        return view('rental_owner.dashboard');
    })->middleware(['verified'])->name('dashboard');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

    Route::resource('/tenantprofiles', TenantprofileController::class);
    Route::post('/rental_owner/tenantprofile/store', [TenantprofileController::class, 'store'])->name('tenantprofile.store');
    Route::put('/rental_owner/tenantprofiles/{id}', [TenantProfileController::class, 'update'])->name('tenantprofiles.update');

    Route::resource('/rooms', RoomManagement::class);
    Route::post('/rental_owner/room/store', [RoomManagement::class, 'store'])->name('room.store');
    Route::put('/rental_owner/rooms/{id}', [RoomManagement::class, 'update'])->name('rooms.update');

    Route::resource('/beds', BedManagement::class);
    Route::post('/rental_owner/bed/store', [BedManagement::class, 'store'])->name('bed.store');
    Route::put('/rental_owner/beds/{id}', [BedManagement::class, 'update'])->name('beds.update');

    Route::resource('/bedassigns', BedAssignConntroller::class);
    // Route::post('/rental_owner/bedassign/store', [BedAssignConntroller::class, 'store'])->name('bedassign.store');
    // Route::put('/rental_owner/bedassigns/{id}', [BedAssignConntroller::class, 'update'])->name('bedassigns.update');
    
});
