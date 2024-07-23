<?php

use App\Models\Taux;
use App\Models\Taxe;
use App\Models\Extra;
use App\Models\Service;
use App\Models\Parametre;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashbordController;
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
    return view('accueil.first');
});


Route::get('/reservation_en_ligne',[AccueilController::class,'ReservationLigne'])->name('reservation.ligne');
Route::post('/passer_reservation_en_ligne',[AccueilController::class,'Reservation'])->name('reservation.passer');

Route::get('/validation_de_compte/{id}',[AccueilController::class,'Modification'])->name('modification.compte');
Route::post('/validation_compte/{id}',[AccueilController::class,'Validation'])->name('validation.compte');



Route::get('/erreur',[DashbordController::class,'Erreur'])->name('page.erreur');
Route::get('/dashboard',[DashbordController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware(['auth', 'isadmin'])->group(function () {

    /////// Service ///////
    Route::resource('service', ServiceController::class);
    Route::get('delete_service/{id}',[ServiceController::class,'delete'])->name('service.delete');
    //////////Extra //////
    Route::resource('extra', ExtraController::class);
    Route::get('delete_extra/{id}',[ExtraController::class,'delete'])->name('extra.delete');
    /////// Parametre //////////
    Route::resource('parametre', ParametreController::class);
    Route::get('/valider/{id}', [ReservationController::class,'Valider'])->name('reservation.valider');

});



Route::middleware(['auth', 'isclient'])->group(function () {

    
});


Route::get('user_profile',[UserController::class,'profile'])->name('user.profile');




    Route::get('/messagerie', [MessageController::class, 'index'])->middleware(['auth','verified'])->name('messages.index');
    Route::get('/chat/{id}', [MessageController::class, 'Chat'])->middleware(['auth','verified'])->name('messages.chat');
    Route::post('/sendmessage', [MessageController::class, 'sendMessage'])->name('sendMessage');
    Route::get('/messages/{user}', [MessageController::class, 'getMessages'])->name('getMessages');


Route::resource('reservation', ReservationController::class);
Route::get('/valider_reservation', [ReservationController::class,'ReservationValider'])->name('reservationliste.valider');
Route::get('/success', [ReservationController::class,'success'])->name('success');
Route::get('/checkout', [ReservationController::class,'checkout'])->name('checkout');
Route::get('reservations/{id}/next-sessions', [ReservationController::class, 'getNextSessionsFromReservation'])->name('reservation.getNextSessions');
Route::get('/reservations_all', [ReservationController::class, 'getAll'])->name('reservation.getAll');






Route::get('prix_extra',[ExtraController::class,'getExtraprix'])->name('extra.prix');
Route::get('liste_extra',[ExtraController::class,'getExtra'])->name('extra.liste');


Route::get('service_get', [ServiceController::class, 'getService'])->name('parametre.liste');
Route::get('servicevalue', [ServiceController::class, 'getValues'])->name('service.getValues');



Route::get('agenda', [AgendaController::class,'index'])->name('agenda.client');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';