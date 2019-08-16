<?php

namespace Vendorname\Packagename\Controllers;

class AssetController
{
    public function serveAction($path)
    {
        $path = dirname(__DIR__) . '/public/' . $path;

        if (file_exists($path)) {
            return response()->file($path);
        }
        return response('', '404');
    }
}
