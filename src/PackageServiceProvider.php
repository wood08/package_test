<?php
/**
 * Created by PhpStorm.
 * User: bjm
 * Date: 2018-09-18
 * Time: 오전 11:39
 */

namespace BJM\PackagesTest;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;


    public function boot()
    {
    }

    public function register()
    {
    }

}