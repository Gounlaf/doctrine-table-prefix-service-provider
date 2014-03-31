Doctrine Table Prefix Service Provider
======================================

Doctrine event listener to dynamically add a table prefix.

Features
--------

* Add a table prefix for any configured database directly in the configuration array.
* Framework agnostic (since it extends [Pimple][1]).

Installation
------------

Through [Composer](http://getcomposer.org) as [val/doctrine-table-prefix-service-provider][2].

Usage
-----

Assuming `$app` is an instance of `Pimple`, `Silex\Application` or `Cilex\Application`.

### Configuration

#### Single DB

```php
<?php

$app['db.options']['prefix'] = 'prefix_';
```

#### Multiple DBs

```php
<?php

$app['dbs.options']['first']['prefix'] = 'first_';
$app['dbs.options']['second']['prefix'] = 'second_';
```

### Registration

#### Pimple

```php
<?php

use Val\Pimple\Provider\DoctrineTablePrefixServiceProvider;

new DoctrineTablePrefixServiceProvider()->register($app);
```

#### Silex

```php
<?php

use Val\Silex\Provider\DoctrineTablePrefixServiceProvider;

$app->register(new DoctrineTablePrefixServiceProvider());
```

#### Cilex

```php
<?php

use Val\Cilex\Provider\DoctrineTablePrefixServiceProvider;

$app->register(new DoctrineTablePrefixServiceProvider());
```

License
-------

MIT, see `LICENSE`.

[1]: http://pimple.sensiolabs.org/
[2]: https://packagist.org/packages/val/doctrine-table-prefix-service-provider
