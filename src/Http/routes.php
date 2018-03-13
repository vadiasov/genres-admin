<?php
/**
 * Created by PhpStorm.
 * User:    vadiasov.volodymyr@gmail.com
 * Project: pack.com
 * Date:    17.02.18
 * Time:    2:52
 */

// src/Http/routes.php
Route::group(['middleware' => ['web', 'admin']], function () {
    Route::get('admin/genres', 'Vadiasov\GenresAdmin\Http\GenresController@index')->name('admin/genres');
    Route::get('admin/genres/create', 'Vadiasov\GenresAdmin\Http\GenresController@create')->name('admin/genres/create');
    Route::post('admin/genres/create', 'Vadiasov\GenresAdmin\Http\GenresController@store');
    Route::get('admin/genres/{id}/edit', 'Vadiasov\GenresAdmin\Http\GenresController@edit');
    Route::post('admin/genres/{id}/edit', 'Vadiasov\GenresAdmin\Http\GenresController@update');
    Route::get('admin/genres/{id}/delete', 'Vadiasov\GenresAdmin\Http\GenresController@destroy');
    
    Route::get('admin/get-genre', 'Vadiasov\GenresAdmin\Http\GenresController@showUser');
    
    /* Demo Test */
    Route::get('genres-test-todos', function(){
        return 'Here goes the Genres list';
    });
});



