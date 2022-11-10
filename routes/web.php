<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\{AgendaSpeakerController,SpeakerController};

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

// Route::get('/', function () {
//     return view('frontend.index');
// })->name('index');


Route::get('/', [FrontPageController::class, 'index'])->name('index');
Route::get('/Frequently-Asked-Questions', [FrontPageController::class, 'faqs'])->name('faqs');

Route::get('/agenda', [FrontPageController::class, 'agenda'])->name('agenda');

Route::get('/session-detail/{id}',[FrontPageController::class,'sessiondetail'])->name('session');

Route::get('speaker-detail/{id}',[FrontPageController::class,'speakerdetail'])->name('speakerdetail');

Route::get('/sessions',[FrontPageController::class,'allsession'])->name('allsession');

//Route::get('/sessions',[FrontPageController::class,'allsession'])->name('allsession');

Route::get('/what-we-did-cop26',[FrontPageController::class,'cop26details'])->name('cop26details');

Route::get('/expect-cop27',[FrontPageController::class,'cop27details'])->name('cop27details');


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//Authentication system
Route::prefix('admin')->group(function(){

    Route::get('login',[AdminController::class,'login'])->name('admin.login');
    Route::get('loginverify',[AdminController::class,'loginverify'])->name('admin.loginverify');
    
    Route::middleware('auth:admin')->group(function () {

        Route::get('dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
        Route::get('logout',[AdminController::class,'logout'])->name('admin.logout');
    });    
});

/**********************add agenda controller********************* */

Route::prefix('admin')->group(function () {
    Route::middleware('auth:admin')->group(function () {
      Route::get('/agendav',[AgendaController::class,'agenda'])->name('agendav');
      Route::get('/addagenda',[AgendaController::class,'addagenda'])->name('add.agenda');
      Route::post('/addagendapost',[AgendaController::class,'addagendapost'])->name('add.agenda.post');
      Route::get('/editagenda/{id}',[AgendaController::class,'editagenda'])->name('edit.agenda');
    Route::post('/editagendapost/{id}',[AgendaController::class,'editagendapost'])->name('edit.agenda.post');
    Route::get('/deleteagenda/{id}', [AgendaController::class,'deleteagenda'])->name('delete.agenda');

    Route::get('/addagendaspeaker/{id}',[AgendaSpeakerController::class,'addagendaspeaker'])->name('add.agenda.speaker');
    Route::post('/addagendaspeakerpost/{id}',[AgendaSpeakerController::class,'addagendaspeakerpost'])->name('add.agenda.speaker.post');

      });

  });

/**********************add speaker ********************* */
  Route::prefix('admin')->group(function () {
    Route::middleware('auth:admin')->group(function () {

    Route::get('/speaker',[SpeakerController::class,'speaker'])->name('speaker');
    Route::get('/addspeaker',[SpeakerController::class,'addspeaker'])->name('add.speaker');
    Route::post('/addspeakerpost',[SpeakerController::class,'addspeakerpost'])->name('add.speaker.post');
    Route::get('/editspeaker/{id}',[SpeakerController::class,'editspeaker'])->name('edit.speaker');
    Route::post('/editspeakerpost/{id}',[SpeakerController::class,'editspeakerpost'])->name('edit.speaker.post');

    });

});

// use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
