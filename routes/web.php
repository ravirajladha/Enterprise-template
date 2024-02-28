<?php

use App\Http\Controllers\{ProfileController,ServiceController};
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
})->name('login');

//by default,it was going to welcome
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/services', [ServiceController::class, 'show'])->name('services.show');
    Route::get('/empty', [ServiceController::class, 'empty'])->name('services.empty');
    Route::get('/project_management', [ServiceController::class, 'project_management'])->name('services.project_management');
    Route::get('/issue', [ServiceController::class, 'issue'])->name('services.issue');
    Route::get('/warranty_claim', [ServiceController::class, 'warranty_claim'])->name('services.warranty_claim');
    Route::get('/invoice', [ServiceController::class, 'invoice'])->name('services.invoice');
    Route::get('/maintenance_visit', [ServiceController::class, 'maintenance_visit']);
  
});

require __DIR__.'/auth.php';
