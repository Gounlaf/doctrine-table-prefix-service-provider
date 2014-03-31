<?php

namespace Val\Silex\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;
use Val\Pimple\Provider\DoctrineTablePrefixServiceProvider as PimpleDoctrineTablePrefixServiceProvider;

class DoctrineTablePrefixServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $pimpleServiceProvider = new PimpleDoctrineTablePrefixServiceProvider();
        $pimpleServiceProvider->register($app);
    }

    public function boot(Application $app)
    {
    }
}
