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
    return view('evalution-sheet');
});

Route::view('/sheetlist', 'sheet-list');

Route::view('/userlist', 'user-list');

Route::view('/aimtemplatelist', 'aimtemplate-list');

Route::view('/templatedetail', 'template-detail');

Route::view('/newaimtemplate', 'new-aimtemplate');

Route::view('/templatedistribution', 'template-distribution');

Route::view('/periodedit', 'period-edit');

Route::view('/group', 'group');



