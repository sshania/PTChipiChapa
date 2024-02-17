    <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmploController;
use App\Http\Controllers\MainController;

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
    return view('welcome');
});

Route::get('/emplos',[EmploController::class, 'index'])->name('Emplo.index');
Route::get('/emplos/create',[EmploController::class, 'create'])->name('Emplo.create');
Route::post('/emplos',[EmploController::class, 'store'])->name('Emplo.store');
Route::get('/emplos/{emplo}/edit',[EmploController::class, 'edit'])->name('Emplo.edit');
Route::put('/emplos/{emplo}/update',[EmploController::class, 'update'])->name('Emplo.update');
Route::delete('/emplos/{emplo}/destroy',[EmploController::class, 'destroy'])->name('Emplo.destroy');

Route::get('/main', [MainController::class, 'main'])->name('main');
Route::get('/activity', [MainController::class, 'activity'])->name('activity');
Route::get('/login', [MainController::class, 'login'])->name('login');
