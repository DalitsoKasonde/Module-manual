<? php

// for unautheticated routes

Route::group(['module' => 'Admin', 'prefix' => 'Admin', 'middleware' => ['web'], 'namespace' => 'App\Modules\Admin\Controllers'], function(){


});

// for authenticated routes

Route::group(['module' => 'Admin', 'prefix' => 'Admin', 'middleware' => ['web', 'admin'], 'namespace' => 'App\Modules\Admin\Controllers'], function(){


});

?>
