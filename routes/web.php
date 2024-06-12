<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ParametreController;
use App\Http\Controllers\ReservationController;

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

Route::get('/', function () {
    
    return view('auth.login');
});

Route::get('/dashboard', function () {
    $entete = 'Dashbord';
    return view('admin.index',compact('entete'));
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'isadmin'])->group(function () {

    /////// Service ///////
    Route::resource('service', ServiceController::class);

    
    //////////Extra //////
    Route::resource('extra', ExtraController::class);

    /////// Parametre //////////
    Route::resource('parametre', ParametreController::class);
});


Route::get('user_profile',[UserController::class,'profile'])->name('user.profile');


Route::get('messagerie',[MessageController::class,'index'])->name('messagerie.index');





Route::resource('reservation', ReservationController::class);
Route::get('/valider/{id}', [ReservationController::class,'Valider'])->name('reservation.valider');
Route::get('/valider_reservation', [ReservationController::class,'ReservationValider'])->name('reservationliste.valider');
Route::get('/success', [ReservationController::class,'success'])->name('success');
Route::get('/checkout', [ReservationController::class,'checkout'])->name('checkout');


Route::get('prix_extra',[ExtraController::class,'getExtraprix'])->name('extra.prix');
Route::get('liste_extra',[ExtraController::class,'getExtra'])->name('extra.liste');


Route::get('service_get', [ServiceController::class, 'getService'])->name('parametre.liste');
Route::get('servicevalue', [ServiceController::class, 'getValues'])->name('service.getValues');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';