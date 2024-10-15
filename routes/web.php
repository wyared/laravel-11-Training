<?php

use App\Http\Controllers\NinjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', [NinjaController::class, 'index'])->name('ninjas.index');
Route::get('/ninjas/create', [NinjaController::class, 'create'])->name('ninjas.create');
Route::get('/ninjas/{id}', [NinjaController::class, 'show'])->name('ninjas.show');


/*

  new resource -> Dojo(s)
    - name, description, location

  each ninja belongs to a single dojo

  Ninja table
  ---------------------------------
  id | name | bio | skill | dojo_id
  ---------------------------------
  01 | jack | ... | 59    | 03
  02 | jill | ... | 85    | 01
  03 | sian | ... | 40    | 03
  04 | brad | ... | 70    | 02
  05 | lars | ... | 99    | 01
  06 | anne | ... | 55    | 01
  ---------------------------------

  Dojo table
  ----------------------------------
  id | name | description | location
  ----------------------------------
  01 | gold | ...         | uk
  02 | abc  | ...         | germany
  03 | hwah | ...         | india

*/