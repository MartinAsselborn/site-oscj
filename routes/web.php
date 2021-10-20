<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\LegajosController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\WebTextController;
use App\Http\Controllers\WebImagenesController;
use App\Http\Controllers\Auth\RegisterController;

/*
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;*/
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

Route::get('/',[WebController::class, 'welcome']);
//Route::get('/',[WebController::class, 'mantenimiento']);
Route::get('/about', [WebController::class, 'about']);
Route::get('/contacts', [WebController::class, 'contacts']);
Route::get('/verplan', [WebController::class, 'verplan']);



Route::group(['middleware' => ['auth','role']], function () {
    //Usuarios rutas
    Route::get('/usuarios',[UsuariosController::class, 'viewAll']);
    Route::get('/usuario/{id}',[UsuariosController::class, 'viewOne']);
    Route::get('/createUser',[UsuariosController::class, 'showFormCreate']);
    Route::get('/editUser/{id}',[UsuariosController::class, 'showFormEdit']);
    Route::post('/createUser',[UsuariosController::class, 'create']);
    Route::post('/editUser',[UsuariosController::class, 'edit']);
    Route::post('/deleteUser',[UsuariosController::class, 'delete']);
    Route::get('/renovarPass/{id}',[UsuariosController::class, 'renovarPass']);
    

    //legajos rutas
    Route::get('/legajos',[LegajosController::class, 'viewAll']);
    Route::get('/legajo/{id}',[LegajosController::class, 'viewOne']);
    Route::get('/createLegajo',[LegajosController::class, 'showFormCreate']);
    Route::get('/editLegajo/{id}',[LegajosController::class, 'showFormEdit']);
    Route::post('/createLegajo',[LegajosController::class, 'create']);
    Route::post('/editLegajo',[LegajosController::class, 'edit']);
    Route::post('/deleteLegajo',[LegajosController::class, 'delete']);
    Route::post('/importarLegajos',[LegajosController::class, 'importarLegajos']);
    Route::get('/exportarLegajos',[LegajosController::class, 'exportarLegajos']);

    //Plan rutas 
    Route::get('/planes',[PLanController::class, 'viewAll']);
    Route::get('/plan/{id}',[PlanController::class, 'viewOne']);
    Route::get('/createPlan',[PlanController::class, 'showFormCreate']);
    Route::get('/editPlan/{id}',[PlanController::class, 'showFormEdit']);
    Route::post('/createPlan',[PlanController::class, 'create']);
    Route::post('/editPlan',[PlanController::class, 'edit']);
    Route::post('/deletePlan',[PlanController::class, 'delete']);
    
    //webtext rutas 
    Route::get('/webtext',[WebTextController::class, 'viewAll']);
    Route::get('/webtext/{id}',[WebTextController::class, 'viewOne']);
    Route::get('/createWebText',[WebTextController::class, 'showFormCreate']);
    Route::get('/editWebText/{id}',[WebTextController::class, 'showFormEdit']);
    Route::post('/createWebText',[WebTextController::class, 'create']);
    Route::post('/editWebText',[WebTextController::class, 'edit']);
    Route::post('/deleteWebText',[WebTextController::class, 'delete']);

     //webimagenes rutas 
     Route::get('/imagenesWeb',[WebImagenesController::class, 'viewAll']);
     Route::get('/imagenesWeb/{id}',[WebImagenesController::class, 'viewOne']);
     Route::get('/createImagenesWeb',[WebImagenesController::class, 'showFormCreate']);
     Route::get('/editImagenesWeb/{id}',[WebImagenesController::class, 'showFormEdit']);
     Route::post('/createImagenesWeb',[WebImagenesController::class, 'create']);
     Route::post('/editImagenesWeb',[WebImagenesController::class, 'edit']);
     Route::post('/deleteImagenesWeb',[WebImagenesController::class, 'delete']);

    Route::get('/administracion',[LegajosController::class, 'viewAll']);
    Route::get('/home', function () {
        return Redirect::to('/administracion');
    });
   
    Route::get('/back', function () {
        return back();
    });
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', function () {
        Auth::logout();
        return Redirect::to('/login');
    });
    Route::get('/logoutwelcome', function () {
        Auth::logout();
        return Redirect::to('/');
    });
});

Auth::routes();
///////////Se anula register//////////
Route::get('/register', function () {
    return Redirect::to('/login');
});
Route::post('/register', function () {
return Redirect::to('/login');
});
/////////////////////////////////////