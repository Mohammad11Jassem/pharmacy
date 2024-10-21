<?php

use App\Http\Controllers\MedicineController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware(['auth'])->prefix('medicines')->group(function () {
//     // Define your routes here
// });

Route::post('add',[MedicineController::class,'createMedicine']);

Route::controller(MedicineController::class)->group(function () {
    Route::post('create_medicine', 'createMedicine')->name('medicine.create');
    Route::post('add_quantity_medicine', 'addQuantity')->name('medicine.addQuantity');
    Route::get('get_all_medicines','getAllMedicines');
});
