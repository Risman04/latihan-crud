<?php
// panggil controller Siswa
use App\Http\Controllers\SiswaController;
// panggil controller wali
use App\Http\Controllers\WaliController;
// panggil controller pembelian
use App\Http\Controllers\PembelianController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route Siswa

// route pembelian


// route backend
Route::group(['prefix'=>'admin', 'middleware'=>['auth']],
function() {
    Route::get('/', function(){
        return view('admin.index');
    });
    Route::resource('siswa', SiswaController::class);
    Route::resource('pembelian', PembelianController::class);
    Route::resource('wali', WaliController::class);
});