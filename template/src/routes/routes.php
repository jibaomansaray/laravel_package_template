<?php

use Illuminate\Support\Facades\Route;

Route::get('vendornamepackagename','Vendorname\Packagename\Controllers\HelloController@indexAction');

// Add your routes before the following route


if (config('env') != 'production') {
    /**
     * Make sure to publish your public assets when going live
     */
    Route::get('vendornamepackagename/{path?}', 'Vendorname\Packagename\Controllers\AssetController@serveAction')->where('path', '(.*)');
}
