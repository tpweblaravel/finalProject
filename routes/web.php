<?php

use Illuminate\Support\Facades\Route;

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
    return view('admin.masterdetailP'); /*normalement haka
    code ta3 3ayn ok sber werili la view khssk fyn kyn 3yn*/
});
Route::get('master-detailsreleve', function () {
    return view('admin.masterdetailreleve'); /*normalement haka
    code ta3 3ayn ok sber werili la view khssk fyn kyn 3yn*/
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
    return view('enseignant.masterDP'); /*normalement haka
    code ta3 3ayn ok sber werili la view khssk fyn kyn 3yn*/
});
Route::get('masterD', function () {
    return view('enseignant.masterD'); /*normalement haka
    code ta3 3ayn ok sber werili la view khssk fyn kyn 3yn*/
});
Route::get('masterDR', function () {
    return view('enseignant.masterDR'); /*normalement haka
    code ta3 3ayn ok sber werili la view khssk fyn kyn 3yn*/
});
Route::get('options', function () {
    return view('option'); /*normalement haka
    code ta3 3ayn ok sber werili la view khssk fyn kyn 3yn*/
});
Route::get('etudiants', function () {
    return view('etudiant'); /*normalement haka
    code ta3 3ayn ok sber werili la view khssk fyn kyn 3yn*/
});

