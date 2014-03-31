<?php

namespace Val\Pimple\Provider;

use Doctrine\ORM\Events;
use Val\Doctrine\Extension\TablePrefix;

class DoctrineTablePrefixServiceProvider
{
    public function register(\Pimple $app)
    {
        $app['dbs.event_manager'] = $app->share($app->extend('dbs.event_manager', function ($managers, $app) {
            $app['dbs.options.initializer']();

            foreach ($app['dbs.options'] as $name => $options) {
                if (isset($options['prefix'])) {
                    $tablePrefix = new TablePrefix($options['prefix']);

                    $managers[$name]->addEventListener(
                        Events::loadClassMetadata,
                        $tablePrefix
                    );
                }
            }

            return $managers;
        }));
    }
}
