<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\V1\SkillController;
use \Laravel\Sanctum\Http\Controllers\CsrfCookieController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::get('v1/skills', [SkillController::class, 'index'])->name('skills.index');
Route::post('v1/skills', [SkillController::class, 'store'])->name('skills.store');
Route::get('v1/skills/{id}', [SkillController::class, 'show'])->name('skills.show');
Route::put('v1/skills/{id}', [SkillController::class, 'update'])->name('skills.update');
Route::delete('v1/skills/{id}', [SkillController::class, 'destroy'])->name('skills.destroy');

//csrf
//Route::get('sanctum/csrf-cookie', [CsrfCookieController::class, 'show'])->name('sanctum.csrf-cookie');
