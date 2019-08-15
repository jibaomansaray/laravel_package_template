<?php

namespace Vendorname\Packagename\Controllers;

use Illuminate\Routing\Controller as BaseController;

class HelloController extends BaseController
{

    public function indexAction()
    {
       return  view('vendornamepackagename::hello');
    }
}