<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\AuthController;

// Route pour l'enregistrement
use App\Http\Middleware\RoleMiddleware;

// Routes publiques
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Routes protégées
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);

    // Routes spécifiques par rôle
    Route::middleware('role:demandeur')->get('/demandeur/dashboard', fn() => response()->json(['message' => 'Bienvenue demandeur']));
    Route::middleware('role:chef_departement')->get('/chef/dashboard', fn() => response()->json(['message' => 'Bienvenue chef de département']));
    Route::middleware('role:vice_doyen')->get('/vice/dashboard', fn() => response()->json(['message' => 'Bienvenue vice-doyen']));
    Route::middleware('role:doyen')->get('/doyen/dashboard', fn() => response()->json(['message' => 'Bienvenue doyen']));
});

