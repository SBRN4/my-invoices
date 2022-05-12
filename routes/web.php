<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\DB;

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
    $invoices = DB::table('invoices')->get();
    return view('invoices.index', [
        'invoices'=> $invoices
    ]);
});

Route::get('/invoices', [InvoiceController::class, 'index']);
Route::get('/invoices/create', [InvoiceController::class, 'create']);
Route::post('/invoices/store', [InvoiceController::class, 'store']);
Route::get('/invoices/{no}/edit', [InvoiceController::class, 'edit']);
Route::put('/invoices/{no}', [InvoiceController::class, 'update']);
Route::resource('/invoices', \App\Http\Controllers\InvoiceController::class);
