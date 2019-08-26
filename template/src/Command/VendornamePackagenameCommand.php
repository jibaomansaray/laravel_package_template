<?php

namespace Vendorname\Packagename\Command;

use Illuminate\Console\Command;

class VendornamePackagenameCommand extends Command 
{

    protected $signature = 'vendorname:packagename';

    protected $description = 'Vendorname Packagename dummy command';

    public function handle(){
        $this->info("Package vendorname/packagename is ready to go");
    }
}