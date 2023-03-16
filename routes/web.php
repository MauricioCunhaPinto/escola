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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware();

//Rota Professor
Route::get('/professor', [App\Http\Controllers\ProfessorController::class, 'index'])->name('professor.index');
Route::get('/professor/create', [App\Http\Controllers\ProfessorController::class, 'create'])->name('professor.create');
Route::post('/professor/store', [App\Http\Controllers\ProfessorController::class, 'store'])->name('professor.store');
Route::get('/professor/{id}', [App\Http\Controllers\ProfessorController::class, 'show'])->name('professor.show');
Route::get('/professor/{id}/edit', [App\Http\Controllers\ProfessorController::class, 'edit'])->name('professor.edit');
Route::put('/professor/update', [App\Http\Controllers\ProfessorController::class, 'update'])->name('professor.update');
Route::get('/professor/{id}/destroy', [App\Http\Controllers\ProfessorController::class, 'destroy'])->name('professor.destroy');

//Rota Série
Route::get('/serie', [App\Http\Controllers\SerieController::class, 'index'])->name('serie.index');
Route::get('/serie/create', [App\Http\Controllers\SerieController::class, 'create'])->name('serie.create');
Route::post('/serie/store', [App\Http\Controllers\SerieController::class, 'store'])->name('serie.store');
Route::get('/serie/{id}', [App\Http\Controllers\SerieController::class, 'show'])->name('serie.show');
Route::get('/serie/{id}/edit', [App\Http\Controllers\SerieController::class, 'edit'])->name('serie.edit');
Route::put('/serie/update', [App\Http\Controllers\SerieController::class, 'update'])->name('serie.update');
Route::get('/serie/{id}/destroy', [App\Http\Controllers\SerieController::class, 'destroy'])->name('serie.destroy');

//Rota Aluno
Route::get('/aluno', [App\Http\Controllers\AlunoController::class, 'index'])->name('aluno.index');
Route::get('/aluno/create', [App\Http\Controllers\AlunoController::class, 'create'])->name('aluno.create');
Route::post('/aluno/store', [App\Http\Controllers\AlunoController::class, 'store'])->name('aluno.store');
Route::get('/aluno/{id}', [App\Http\Controllers\AlunoController::class, 'show'])->name('aluno.show');
Route::get('/aluno/{id}/edit', [App\Http\Controllers\AlunoController::class, 'edit'])->name('aluno.edit');
Route::put('/aluno/update', [App\Http\Controllers\AlunoController::class, 'update'])->name('aluno.update');
Route::get('/aluno/{id}/destroy', [App\Http\Controllers\AlunoController::class, 'destroy'])->name('aluno.destroy');

//rotas usuários
Route::put('/user/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
Route::get('/user/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
Route::post('/user', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('user.show');
Route::get('/user/{id}/delete', [App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');

//Realacionar Professores e Series
Route::get('relacionar', [App\Http\Controllers\Professor_serieController::class, 'index'])->name('relacionar.index');
Route::get('relacionar/create', [App\Http\Controllers\Professor_serieController::class, 'create'])->name('relacionar.create');
Route::post('relacionar/store', [App\Http\Controllers\Professor_serieController::class, 'store'])->name('relacionar.store');
Route::get('/relacionar/{id}', [App\Http\Controllers\Professor_serieController::class, 'show'])->name('relacionar.show');
Route::get('/relacionar/{id}/edit', [App\Http\Controllers\Professor_serieController::class, 'edit'])->name('relacionar.edit');
Route::get('/relacionar/{id}/delete', [App\Http\Controllers\Professor_serieController::class, 'destroy'])->name('relacionar.destroy');
