<?php

use App\Http\Controllers\{ManufacturingController, ProfileController, RetailController, ServiceController};
use App\Http\Controllers\DistributionController;
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
    Route::get('/maintenance_schedule', [ServiceController::class, 'maintenance_schedule']);
    Route::get('/transaction', [ServiceController::class, 'transaction']);
    Route::get('/customer', [ServiceController::class, 'customer']);
    Route::get('/campaign', [ServiceController::class, 'campaign']);
    Route::get('/subscription', [ServiceController::class, 'subscription']);


    Route::get('/analysis', [ManufacturingController::class, 'analysis']);
    Route::get('/operations', [ManufacturingController::class, 'operations']);
    Route::get('/bill_of_material', [ManufacturingController::class, 'bill_of_material']);
    Route::get('/item_variants', [ManufacturingController::class, 'item_variants']);
    Route::get('/item_balance', [ManufacturingController::class, 'item_balance']);
    Route::get('/batched_inventory', [ManufacturingController::class, 'batched_inventory']);
    Route::get('/add_batched_inventory', [ManufacturingController::class, 'add_batched_inventory']);
    Route::get('/serialized_inventory', [ManufacturingController::class, 'serialized_inventory']);
    Route::get('/capacity_planning', [ManufacturingController::class, 'capacity_planning']);
    Route::get('/product_variants', [ManufacturingController::class, 'product_variants']);
    Route::get('/product_balance', [ManufacturingController::class, 'product_balance']);
    Route::get('/subadmin', [ManufacturingController::class, 'subadmin']);

    //to be started when the pages will be created
    Route::get('/transactions', [RetailController::class, 'transactions']);
    
    Route::get('/warehousetree', [RetailController::class, 'warehousetree']);
    Route::get('/stocksummary', [RetailController::class, 'stocksummary']);
    Route::get('/stock', [RetailController::class, 'stock']);
    Route::get('/productecom', [RetailController::class, 'productecom']);
    Route::get('/retcampaign', [RetailController::class, 'campaign']);
    Route::get('/customer', [RetailController::class, 'customer']);
    Route::get('/customerdetails', [RetailController::class, 'customerdetails']);
    Route::get('/checkout', [RetailController::class, 'checkout']);
    
    Route::get('/transaction', [DistributionController::class, 'transaction']);
    Route::get('/mega_transaction', [DistributionController::class, 'mega_transaction']);
    Route::get('/tree', [DistributionController::class, 'tree']);


  
});

require __DIR__.'/auth.php';
