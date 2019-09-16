<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {

   // Add your web  routes here
   Route::get('vendornamepackagename','Vendorname\Packagename\Controllers\HelloController@indexAction');

});



if (config('env') != 'production') {
    /**
     * Make sure to publish your public assets when going live
     */
    Route::get('vendornamepackagename/{path?}', 'Vendorname\Packagename\Controllers\AssetController@serveAction')->where('path', '(.*)');
}
