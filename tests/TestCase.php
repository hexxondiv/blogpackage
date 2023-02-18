<?php
namespace Hexxondiv\BlogPackage\Tests;

use Hexxondiv\BlogPackage\BlogPackageServiceProvider;

class TestCase extends \Orchestra\Testbench\{
    public function setUp():void{
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app){
        return [
            BlogPackageServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetup($app){
        // perform environment setup
    }
}