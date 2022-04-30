<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\controllers\projectcontroller;
use App\http\controllers\Studentcontroller;
use App\http\controllers\UserStudentcontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/userInformation', [userStudentController::class, 'userInformation']);
Route::post('/userRegistration',[userStudentController::class, 'userRegistrationSubmit']);
