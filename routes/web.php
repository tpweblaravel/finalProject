<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GooglePieController;

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
Route::get('/', function () {
    return view('layouts.master');
});
Route::get('promotion', function () {
    return view('promotion');
});
Route::get('module', function () {
    return view('module');
});
Route::get('master-details', function () {
    return view('admin.masterdetailP'); 
});
Route::get('master-detailsreleve', function () {
    return view('admin.masterdetailreleve'); 
});
Route::get('/', function () {
    return view('layouts.master2');
});
Route::get('promo', function () {
    return view('promoEnseignant');
});
Route::get('modules', function () {
    return view('enseignant.modules');
});
Route::get('masterdp', function () {
    return view('enseignant.masterDP');
});
Route::get('masterD', function () {
    return view('enseignant.masterD');
});
Route::get('masterDR', function () {
    return view('enseignant.masterDR'); 
});
Route::get('options', function () {
    return view('option');
});
Route::get('etudiants', function () {
    return view('etudiant'); 
});

Route::get('utilisateur', function () {
    return view('utilisateur'); 
});
Route::get('masterdec', function () {
    return view('admin.masterdec'); 
});

Route::get('adde', function () {
    return view('admin.addetudiant');
});
/*Route::get('addp', function () {
    return view('admin.addpromo'); 
});*/
Route::get('addo', function () {
    return view('admin.addoption'); 
});
//Auth::routes(); Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //route promotion
    Route::get('promotions', 'App\Http\Controllers\PromotionController@index');
    Route::get('promotions/create', 'App\Http\Controllers\PromotionController@create');
    Route::post('promotions', 'App\Http\Controllers\PromotionController@store');
    Route::get('promotions/{id}/edit', 'App\Http\Controllers\PromotionController@edit');
    Route::put('promotions/{id}', 'App\Http\Controllers\PromotionController@update');
    Route::delete('promotions/{id}', 'App\Http\Controllers\PromotionController@destroy');
    Route::get('/etudiants/{}','App\Http\Controllers\EtudiantController@Liste2');
    //route options
    Route::get('options', 'App\Http\Controllers\OptionController@index');
    Route::get('options/create', 'App\Http\Controllers\OptionController@create');
    Route::post('options', 'App\Http\Controllers\OptionController@store');
    Route::get('options/{id}/edit', 'App\Http\Controllers\OptionController@edit');
    Route::put('options/{id}', 'App\Http\Controllers\OptionController@update');
    Route::delete('options/{id}', 'App\Http\Controllers\OptionController@destroy');
    //route etudiants
    Route::get('etudiants', 'App\Http\Controllers\EtudiantController@index');
    Route::get('etudiants/create', 'App\Http\Controllers\EtudiantController@create');
    Route::post('etudiants', 'App\Http\Controllers\EtudiantController@store');
    Route::get('etudiants/{id}/edit', 'App\Http\Controllers\EtudiantController@edit');
    Route::put('etudiants/{id}', 'App\Http\Controllers\EtudiantController@update');
    Route::delete('etudiants/{id}', 'App\Http\Controllers\EtudiantController@destroy');
    Route::get('/etudiants/{}','App\Http\Controllers\EtudiantController@Liste');
    Route::get('/etudiants/{}','App\Http\Controllers\EtudiantController@Liste2');
    //route modules
    Route::get('modules', 'App\Http\Controllers\ModuleController@index');
    Route::get('modules/create', 'App\Http\Controllers\ModuleController@create');
    Route::post('modules', 'App\Http\Controllers\ModuleController@store');
    Route::get('modules/{id}/edit', 'App\Http\Controllers\ModuleController@edit');
    Route::put('modules/{id}', 'App\Http\Controllers\ModuleController@update');
    Route::delete('modules/{id}', 'App\Http\Controllers\ModuleController@destroy');
    Route::get('/modules/{}','App\Http\Controllers\ModuleController@ListeModule');
    

    //route modules
Route::get('module', 'App\Http\Controllers\EnseigantController@index');
Route::put('module/{id}/show', 'App\Http\Controllers\EnseigantController@show');


//route notes
Route::get('note', 'App\Http\Controllers\EnseignantController@index');
Route::get('note/create', 'App\Http\Controllers\EnseignanController@create');
Route::post('note', 'App\Http\Controllers\EnseignanController@store');
Route::get('note/{id}/edit', 'App\Http\Controllers\EnseignanController@edit');
Route::put('note/{id}', 'App\Http\Controllers\EnseignanController@update');
Route::put('note/{id}/show', 'App\Http\Controllers\EnseignanController@show');


<<<<<<< HEAD
//route promotion
Route::get('promotions', 'App\Http\Controllers\PromotionController@index');
Route::get('promotions/create', 'App\Http\Controllers\PromotionController@create');
Route::post('promotions', 'App\Http\Controllers\PromotionController@store');
Route::get('promotions/{id}/edit', 'App\Http\Controllers\PromotionController@edit');
Route::put('promotions/{id}', 'App\Http\Controllers\PromotionController@update');
Route::delete('promotions/{id}', 'App\Http\Controllers\PromotionController@destroy');
//route options
Route::get('options', 'App\Http\Controllers\OptionController@index');
Route::get('options/create', 'App\Http\Controllers\OptionController@create');
Route::post('options', 'App\Http\Controllers\OptionController@store');
Route::get('options/{id}/edit', 'App\Http\Controllers\OptionController@edit');
Route::put('options/{id}', 'App\Http\Controllers\OptionController@update');
Route::delete('options/{id}', 'App\Http\Controllers\OptionController@destroy');
//route etudiants
Route::get('etudiants', 'App\Http\Controllers\EtudiantController@index');
Route::get('etudiants/create', 'App\Http\Controllers\EtudiantController@create');
Route::post('etudiants', 'App\Http\Controllers\EtudiantController@store');
Route::get('etudiants/{id}/edit', 'App\Http\Controllers\EtudiantController@edit');
Route::put('etudiants/{id}', 'App\Http\Controllers\EtudiantController@update');
Route::delete('etudiants/{id}', 'App\Http\Controllers\EtudiantController@destroy');
//route modules
Route::get('modules', 'App\Http\Controllers\ModuleController@index');
Route::get('modules/create', 'App\Http\Controllers\ModuleController@create');
Route::post('modules', 'App\Http\Controllers\ModuleController@store');
Route::get('modules/{id}/edit', 'App\Http\Controllers\ModuleController@edit');
Route::put('modules/{id}', 'App\Http\Controllers\ModuleController@update');
Route::delete('modules/{id}', 'App\Http\Controllers\ModuleController@destroy');



//route notes
Route::get('notes', 'App\Http\Controllers\EnseignantController@index');
Route::get('notes/create', 'App\Http\Controllers\EnseignantController@create');
Route::post('notes', 'App\Http\Controllers\EnseignantController@store');
Route::get('notes/{id}/edit', 'App\Http\Controllers\EnseignantController@edit');
Route::put('notes/{id}', 'App\Http\Controllers\EnseignantController@update');
Route::put('notes/{id}/show', 'App\Http\Controllers\EnseignantController@show');



//route modules
Route::get('module', 'App\Http\Controllers\modulesController@index');
Route::get('module/create', 'App\Http\Controllers\modulesController@create');
Route::post('module', 'App\Http\Controllers\modulesController@store');
Route::put('module/{id}/show', 'App\Http\Controllers\modulesController@show');


=======
>>>>>>> 2309daef0dc60cd4c0700986cd38f7e42277fbc1
//route users
Route::get('users', 'App\Http\Controllers\UserController@index');
Route::get('users/create', 'App\Http\Controllers\UserController@create');
Route::post('users', 'App\Http\Controllers\UserController@store');
Route::get('users/{id}/edit', 'App\Http\Controllers\UserController@edit');
Route::put('users/{id}', 'App\Http\Controllers\UserController@update');
Route::delete('users/{id}', 'App\Http\Controllers\UserController@destroy');
//Route::get('/pie_chart', 'GoogleGraphController@index');
Route::get('/pie-chart', [GooglePieController::class, 'index']);

?> 



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
