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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('content');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function (){

    // Routes Biens
    Route::get('/biens', function(){
        return view('biens.MyAccueil');
    })-> name('biens.accueil');

    Route::get('/biens/listeBiens', 'App\Http\Controllers\BienController@index')->name('biens.listeBiens');

    Route::get('/biens/nouveauBien', function(){
        return view('biens.nouveauBien');
    })-> name('biens.nouveauBien');

    Route::get('/biens/editBien/{id}','App\Http\Controllers\BienController@edit')->name('biens.editBien');
    Route::post('/biens/updateBien/{id}','App\Http\Controllers\BienController@update')->name('biens.updateBien');
    Route::get('/biens/deleteBien/{id}','App\Http\Controllers\BienController@destroy')->name('biens.deleteBien');


    // Route visites
    
    Route::get('/biens/listeVisites','App\Http\Controllers\VisiteController@index')->name('biens.listeVentes');


    Route::get('/biens/nouvelleVisite', function(){
        return view('biens.nouvelleVisite');
    })-> name('biens.nouvelleVisite');

    Route::get('/biens/editVisite/{id}','App\Http\Controllers\VisiteController@edit')->name('biens.editVisite');
    Route::post('/biens/updateVisite/{id}','App\Http\Controllers\VisiteController@update')->name('biens.updateVisite');
    Route::get('/biens/deleteVisite/{id}','App\Http\Controllers\VisiteController@destroy')->name('biens.deleteVisite');


    // Route ventes
    Route::get('/biens/nouvelleVente', function(){
        return view('biens.nouvelleVente');
    })-> name('biens.nouvelleVente');

    Route::get('/biens/listeVentes','App\Http\Controllers\VenteController@index')->name('biens.listeBiens');

    Route::get('/biens/editVente/{id}','App\Http\Controllers\VenteController@edit')->name('biens.editVente');
    Route::post('/biens/updateVente/{id}','App\Http\Controllers\VenteController@update')->name('biens.updateVente');
    Route::get('/biens/deleteVente/{id}','App\Http\Controllers\VenteController@destroy')->name('biens.deleteVente');

    // Routes Clients
    Route::get('/clients', function(){
        return view('clients.MyAccueil');
    })-> name('clients.accueil');

    Route::get('/clients/listeClients','App\Http\Controllers\ClientController@index')->name('clients.listeClients');

    Route::get('/clients/editClient/{id}','App\Http\Controllers\ClientController@edit')->name('clients.editClient');
    Route::post('/clients/updateClient/{id}','App\Http\Controllers\ClientController@update')->name('clients.updateClient');
    Route::get('/clients/deleteClient/{id}','App\Http\Controllers\ClientController@destroy')->name('clients.deleteClient');
    Route::get('/clients/showClient/{id}','App\Http\Controllers\ClientController@show')->name('clients.showClient');


    Route::get('/clients/nouveauClient', function(){
        return view('clients.nouveauClient');
    })-> name('clients.nouveauClient');

    // Routes Locataires
    Route::get('/locations', function(){
        return view('locations.MyAccueil');
    })-> name('locations.accueil');

    Route::get('/locations/listeContrats','App\Http\Controllers\LocationController@index')->name('locations.listeContrats');

    Route::get('/locations/locatairesAJour','App\Http\Controllers\LocationController@index')-> name('locations.locatairesAJour');

    Route::get('/locations/locatairesNonAJour','App\Http\Controllers\LocationController@index')-> name ('locations.locatairesNonAJour');

    Route::get('/locations/nouveauContrat', function(){
        return view('locations.nouveauContrat');
    })-> name ('locations.nouveauContrat');

    Route::get('/locations/editLocation/{id}','App\Http\Controllers\LocationController@edit')->name('locations.editLocation');
    Route::post('/locations/updateLocation/{id}','App\Http\Controllers\LocationController@update')->name('locations.updateLocation');
    Route::get('/locations/deleteLocation/{id}','App\Http\Controllers\LocationController@destroy')->name('locations.deleteLocation');

    //Routes Acquisitions

    Route::get('/acquisition', function(){
        return view('acquisitions.MyAcceuil');
    })-> name('acquisitions.accueil');

    Route::get('/acquisitions/listeContrats','App\Http\Controllers\AcquisitionController@index')->name('acquisitions.listeAcquisition');

    Route::get('/acquisitions/locatairesAJour','App\Http\Controllers\AcquisitionController@index')-> name('acquisitions.listeDossiersEnCours');

    Route::get('/acquisitions/locatairesNonAJour','App\Http\Controllers\AcquisitionController@index')-> name ('acquisitions.listeDossiersArchiver');

    Route::get('/acquisitions/update/{id}','App\Http\Controllers\AcquisitionController@update')-> name ('acquisitions.update');

    Route::get('/acquisitions/nouvelleAcquisition', function(){
        return view('acquisitions.nouvelleAcquisition');
    })-> name ('acquisitions.nouvelleAcquisition');



    Route::get('/locations/editLocation/{id}','App\Http\Controllers\LocationController@edit')->name('locations.editLocation');
    Route::post('/locations/updateLocation/{id}','App\Http\Controllers\LocationController@update')->name('locations.updateLocation');
    Route::get('/locations/deleteLocation/{id}','App\Http\Controllers\LocationController@destroy')->name('locations.deleteLocation');


    //CREATION
        
        // creation de client

        Route::post('/createClient', 'App\Http\Controllers\ClientController@store')->name('createClient');

        // creation de bien

        Route::post('/createBien', 'App\Http\Controllers\BienController@store')->name('createBien');
        
        // enregistrement de ventes
        
        Route::post('/createVente', 'App\Http\Controllers\VenteController@store')->name('createVente');

        // enregistrement des visites

        Route::post('/createVisite', 'App\Http\Controllers\VisiteController@store')->name('createVisite');

        //création de locations

        Route::post('/createLocation','App\Http\Controllers\LocationController@store')->name('createLocation');

        //création d'acquisitions

        Route::post('/createAcquisition','App\Http\Controllers\AcquisitionController@store')->name('createAcquisition');
});
