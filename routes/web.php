<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuProvinceOnglets;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Redirect;

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Miscelaneous\InfoEssentiel\InfoVisa\InfoVisaController;
use App\Http\Controllers\Miscelaneous\ActuOntDocs\ActuOntcontroller;

use App\Http\Controllers\Admin\ProvinceDoc\ProvinceController;
use App\Http\Controllers\Admin\ProvinceDoc\DecoupageAdminCatController;
use App\Http\Controllers\Admin\ProvinceDoc\DeuxniveauController;
use App\Http\Controllers\Admin\ProvinceDoc\ProvinceArticleController;
use App\Http\Controllers\Admin\ProvinceDoc\ProvinceArtActionController;

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

//Route::get('/', function () {
 //   return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




//start  admindashboard route ----  admindashboard route --- admindashboard route
Route::middleware('auth:admin')->group(function(){
    Route::get('/adminDashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    
    //start route for province management 

    Route::prefix('admin')->group(function(){
        Route::resource('province', ProvinceController::class)
                        ->missing(function () {
            return Redirect::route('welcome');
        });
        Route::resource('decoupage-Administratif', DecoupageAdminCatController::class)
                        ->missing(function () {
                            return Redirect::route('welcome');
                        });
        Route::resource('deuxniveau', DeuxniveauController::class)
                        ->missing(function () {
                            return Redirect::route('welcome');
                        });
        Route::resource('provart', ProvinceArticleController::class);

        Route::get('province-article/{artTitle}', [ProvinceArtActionController::class, 'showArticle'])->name('provarticle.show');
    });
});


//end adminDashbaord route================================================================================

// application route ------------------------------------ application route


Route::get('/',[WelcomeController::class, 'welcome'])->name('welcome');

//province articles links
Route::get('provinces/{province}/articles/{id}/{name}',[MenuProvinceOnglets::class, 'ProvinceArticleOnglet'])->name('province.article');


//essentiel info route
//info visa
Route::get('/infoEssentiel/{cat}/{catid}/{id}/{title}', [InfoVisaController::class, 'infoVisa'])->name('misc.infoessentiel.infovisa');

//ont info route
Route::get('/actu_ont/{id}/{title}' , [ActuOntcontroller::class, 'ontActu'])->name('misc.ont_actu');


require __DIR__.'/auth.php';
