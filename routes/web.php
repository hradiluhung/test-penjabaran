<?php

use App\Models\Spj;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

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

Route::get('/test', function () {
    $repeatHeader = filter_var(request()->get('repeatHeader'), FILTER_VALIDATE_BOOLEAN);
    $pdf = PDF::loadView('penjabaran', compact('repeatHeader'));
    return $pdf->setPaper('a3', 'landscape')->stream();
});
