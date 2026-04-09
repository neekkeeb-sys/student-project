<?php

use Illuminate\Support\Facades\Route;
// use StudentController;
// use App\Http\Controllers\CountryController;
// use App\Http\Controllers\DistrictController;

// Route::get('/students', [StudentController::class,'index']);
// Route::post('/students', [StudentController::class,'store']);
// Route::get('/students/create', [StudentController::class,'create']);
// Route::post('/students/store', [StudentController::class,'store']);
// Route::get('/students/edit/{id}', [StudentController::class,'edit']);
// Route::post('/students/update/{id}', [StudentController::class,'update']);
// Route::get('/students/delete/{id}', [StudentController::class,'destroy']);


// Route::get('/country', [CountryController::class,'index']);
// Route::post('/country', [CountryController::class,'store']);
// Route::get('/country/create', [CountryController::class,'create']);
// Route::post('/country/store', [CountryController::class,'store']);
// Route::get('/country/edit/{id}', [CountryController::class,'edit']);
// Route::post('/country/update/{id}', [CountryController::class,'update']);
// Route::get('/country/delete/{id}', [CountryController::class,'destroy']);

// Student Routes
// Route::get('/students', [StudentController::class, 'index'])->name('students.index');
// Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
// Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
// Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
// Route::post('/students/update/{id}', [StudentController::class, 'update'])->name('students.update');
// Route::get('/students/delete/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

// //Country Routes
// // Route::resource('country', CountryController::class);
// Route::get('/country', [CountryController::class, 'index'])->name('country.index');
// Route::get('/country/create', [CountryController::class, 'create'])->name('country.create');
// Route::post('/country/store', [CountryController::class, 'store'])->name('country.store');
// Route::get('/country/edit/{id}', [CountryController::class, 'edit'])->name('country.edit');
// Route::post('/country/update/{id}', [CountryController::class, 'update'])->name('country.update');
// Route::get('/country/delete/{id}', [CountryController::class, 'destroy'])->name('country.destroy');


// // District Routes
// Route::get('/district',              [DistrictController::class, 'index'])  ->name('district.index');
// Route::get('/district/create',       [DistrictController::class, 'create']) ->name('district.create');
// Route::post('/district/store',       [DistrictController::class, 'store'])  ->name('district.store');
// Route::get('/district/edit/{id}',    [DistrictController::class, 'edit'])   ->name('district.edit');
// Route::post('/district/update/{id}', [DistrictController::class, 'update']) ->name('district.update');
// Route::get('/district/delete/{id}',  [DistrictController::class, 'destroy'])->name('district.destroy');










Route::resource('country', CountryController::class);

// District Routes
Route::resource('district', DistrictController::class);

// Student Routes
Route::resource('students', StudentController::class)->middleware('auth');

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
    // dd(1);
   return redirect()->route('students.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
