<?php

// for unautheticated routes

Route::group(['module' => 'Customer', 'prefix' => 'Customer', 'middleware' => ['web'], 'namespace' => 'App\Modules\Admin\Controllers'], function(){


});

// for authenticated routes

Route::group(['module' => 'Customer', 'prefix' => 'Customer', 'middleware' => ['web', 'customer'], 'namespace' => 'App\Modules\Customer\Controllers'], function(){


});

?>
