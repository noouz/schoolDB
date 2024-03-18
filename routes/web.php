<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\SchedulesController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function(){
    //course課程列表頁面
    Route::get('/course',[CourseController::class,'index']);
    //新增課程頁面
    Route::get('/add-course',[CourseController::class,'addPage']);
    Route::post('/post-course',[CourseController::class,'add']);
    //編輯課程頁面
    Route::get('/edit-course',[CourseController::class,'editPage']);
    Route::post('/post-edit',[CourseController::class,'updateCourse']);
    //刪除
    Route::post('/delete-course',[CourseController::class,'delete']);
});

//teachers教師列表頁面
Route::get('/teacher',[TeachersController::class,'index'])->middleware(['auth', 'verified']);
//新增教師頁面
Route::get('/teacher/add',[TeachersController::class,'add'])->middleware(['auth', 'verified']);
//編輯教師頁面
Route::get('/teacher/edit',[TeachersController::class,'edit'])->middleware(['auth', 'verified']);

//schedules課表列表頁面
Route::get('/schedule',[SchedulesController::class,'index'])->middleware(['auth', 'verified']);
//新增課表頁面
Route::get('/schedule/add',[SchedulesController::class,'add'])->middleware(['auth', 'verified']);
//編輯課表頁面
Route::get('/schedule/edit',[SchedulesController::class,'edit'])->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
