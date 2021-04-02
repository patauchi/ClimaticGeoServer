<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create  something great!
|
*/
Route::view('/', 'HomeView') -> name('home');
Route::view('/about', 'AboutView') -> name('about');

// Route::resource('proyectos', 'ProjectController')->names('project')->parameters([ 'proyecto' => 'project' ]);

Route::resource('proyecto', 'ProjectController')
->parameters(['proyecto'=> 'project'])
->names('project');

// Route::get('/project', 'ProjectController@index') -> name('project.index');
// Route::get('/project/create', 'ProjectController@create') -> name('project.create');
// Route::get('/project/{project}/edit', 'ProjectController@edit') -> name('project.edit');
// Route::patch('/project/{project}', 'ProjectController@update') -> name('project.update');
// Route::get('/project/{project}', 'ProjectController@show') -> name('project.show');
// Route::post('/project', 'ProjectController@store') -> name('project.store');
// Route::delete('/project/{project}', 'ProjectController@destroy') -> name('project.destroy');





Auth::routes(['register'=>false]);
