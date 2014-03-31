<?php

namespace Val\Cilex\Provider;

use Cilex\Application;
use Cilex\ServiceProviderInterface;
use Val\Pimple\Provider\DoctrineTablePrefixServiceProvider as PimpleDoctrineTablePrefixServiceProvider;

class DoctrineTablePrefixServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $pimpleServiceProvider = new PimpleDoctrineTablePrefixServiceProvider();
        $pimpleServiceProvider->register($app);
    }
}
