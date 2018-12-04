<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
 */

Route::get('/', function () {
    return view('home.index');
});

Route::group(
    [
        'prefix' => 'laravel-code-generator/docs',
    ], function () {

        Route::get('/{version}', 'LaravelCodeGeneratorController@docs')
            ->name('laravel-code-generator.docs');
    });
/*
Route::group(
[
'prefix' => 'laravel-code-generator/workflow',
], function () {

Route::get('/{version}', 'LaravelCodeGeneratorController@workflow')
->name('laravel-code-generator.workflow');
});
 */

Route::group(
    [
        'prefix' => 'laravel-code-generator/demos/1.1',
    ], function () {

        Route::get('/', 'Demos\CodeGenerator\v11\BiographiesController@index')
            ->name('laravel-code-generator.demos.biography.v1-1.index');

        Route::get('/create', 'Demos\CodeGenerator\v11\BiographiesController@create')
            ->name('laravel-code-generator.demos.biography.v1-1.create');

        Route::get('/show/{biography}', 'Demos\CodeGenerator\v11\BiographiesController@show')
            ->name('laravel-code-generator.demos.biography.v1-1.show')
            ->where('id', '[0-9]+');

        Route::get('/{biography}/edit', 'Demos\CodeGenerator\v11\BiographiesController@edit')
            ->name('laravel-code-generator.demos.biography.v1-1.edit')
            ->where('id', '[0-9]+');

        Route::post('/', 'Demos\CodeGenerator\v11\BiographiesController@store')
            ->name('laravel-code-generator.demos.biography.v1-1.store');

        Route::put('biography/{biography}', 'Demos\CodeGenerator\v11\BiographiesController@update')
            ->name('laravel-code-generator.demos.biography.v1-1.update')
            ->where('id', '[0-9]+');

        Route::delete('/biography/{biography}', 'Demos\CodeGenerator\v11\BiographiesController@destroy')
            ->name('laravel-code-generator.demos.biography.v1-1.destroy')
            ->where('id', '[0-9]+');

    });

Route::group(
    [
        'prefix' => 'laravel-code-generator/demos/1.2',
    ], function () {

        Route::get('/', 'Demos\CodeGenerator\v12\BiographiesController@index')
            ->name('laravel-code-generator.demos.v1-2.biography.index');

        Route::get('/create', 'Demos\CodeGenerator\v12\BiographiesController@create')
            ->name('laravel-code-generator.demos.v1-2.biography.create');

        Route::get('/show/{biography}', 'Demos\CodeGenerator\v12\BiographiesController@show')
            ->name('laravel-code-generator.demos.v1-2.biography.show')
            ->where('id', '[0-9]+');

        Route::get('/{biography}/edit', 'Demos\CodeGenerator\v12\BiographiesController@edit')
            ->name('laravel-code-generator.demos.v1-2.biography.edit')
            ->where('id', '[0-9]+');

        Route::post('/', 'Demos\CodeGenerator\v12\BiographiesController@store')
            ->name('laravel-code-generator.demos.v1-2.biography.store');

        Route::put('biography/{biography}', 'Demos\CodeGenerator\v12\BiographiesController@update')
            ->name('laravel-code-generator.demos.v1-2.biography.update')
            ->where('id', '[0-9]+');

        Route::delete('/biography/{biography}', 'Demos\CodeGenerator\v12\BiographiesController@destroy')
            ->name('laravel-code-generator.demos.v1-2.biography.destroy')
            ->where('id', '[0-9]+');

    });

Route::group(
    [
        'prefix' => 'laravel-code-generator/demos/v2-1',
    ], function () {

        Route::get('/', 'Demos\CodeGenerator\v21\BiographiesController@index')
            ->name('laravel-code-generator.demos.v2-1.biography.index');

        Route::get('/create', 'Demos\CodeGenerator\v21\BiographiesController@create')
            ->name('laravel-code-generator.demos.v2-1.biography.create');

        Route::get('/show/{biography}', 'Demos\CodeGenerator\v21\BiographiesController@show')
            ->name('laravel-code-generator.demos.v2-1.biography.show')
            ->where('id', '[0-9]+');

        Route::get('/{biography}/edit', 'Demos\CodeGenerator\v21\BiographiesController@edit')
            ->name('laravel-code-generator.demos.v2-1.biography.edit')
            ->where('id', '[0-9]+');

        Route::post('/', 'Demos\CodeGenerator\v21\BiographiesController@store')
            ->name('laravel-code-generator.demos.v2-1.biography.store');

        Route::put('biography/{biography}', 'Demos\CodeGenerator\v21\BiographiesController@update')
            ->name('laravel-code-generator.demos.v2-1.biography.update')
            ->where('id', '[0-9]+');

        Route::delete('/biography/{biography}', 'Demos\CodeGenerator\v21\BiographiesController@destroy')
            ->name('laravel-code-generator.demos.v2-1.biography.destroy')
            ->where('id', '[0-9]+');

    });

Route::group(
    [
        'prefix' => 'laravel-code-generator/demos/v2-2',
    ], function () {

        Route::get('/', 'Demos\CodeGenerator\v22\BiographiesController@index')
            ->name('laravel-code-generator.demos.v2-2.biography.index');

        Route::get('/create', 'Demos\CodeGenerator\v22\BiographiesController@create')
            ->name('laravel-code-generator.demos.v2-2.biography.create');

        Route::get('/show/{biography}', 'Demos\CodeGenerator\v22\BiographiesController@show')
            ->name('laravel-code-generator.demos.v2-2.biography.show')
            ->where('id', '[0-9]+');

        Route::get('/{biography}/edit', 'Demos\CodeGenerator\v22\BiographiesController@edit')
            ->name('laravel-code-generator.demos.v2-2.biography.edit')
            ->where('id', '[0-9]+');

        Route::post('/', 'Demos\CodeGenerator\v22\BiographiesController@store')
            ->name('laravel-code-generator.demos.v2-2.biography.store');

        Route::put('biography/{biography}', 'Demos\CodeGenerator\v22\BiographiesController@update')
            ->name('laravel-code-generator.demos.v2-2.biography.update')
            ->where('id', '[0-9]+');

        Route::delete('/biography/{biography}', 'Demos\CodeGenerator\v22\BiographiesController@destroy')
            ->name('laravel-code-generator.demos.v2-2.biography.destroy')
            ->where('id', '[0-9]+');

    });
