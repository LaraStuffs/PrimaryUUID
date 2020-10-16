# LaraStuffs Primary UUID

[![Packagist Version](https://img.shields.io/packagist/v/larastuffs/primary-uuid)](https://packagist.org/packages/larastuffs/primary-uuid)
[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](https://github.com/LaraStuffs/PrimaryUUID/blob/master/LICENSE.md)

#### this package provides a simple interface for using UUID as a primary key in models

## Requirements
 - PHP 7.2 or latest
 - Laravel 6.* | 7.* | 8.*

## Installation
Require this package with composer using the following command:
```bash
composer require larastuffs/primary-uuid
```

## Usage
Follow the instructions to adapt your models and migrations

### Model Setup
```php
<?php
use ...;
use LaraStuffs\PrimaryUUID\Eloquent\Concerns\UseUUIDAsPrimaryKey;

class MyModel extends Model {
 
    use UseUUIDAsPrimaryKey;
 
    ...
}
```

### Migration Setup
```php
<?php
Schema::create('table_name', function (Blueprint $table) {
    $table->uuid('id')->primary();
});
```


## Possible incompatibilities


if you use [closures] to define your model events, I strongly recommend that you use model [observers] instead

## Contributing
Contributions are more than welcome. Fork, improve and make a pull request. For bugs, ideas for improvement or other, please create an [issue].

[closures]: <https://laravel.com/docs/7.x/eloquent#events-using-closures>
[observers]: <https://laravel.com/docs/7.x/eloquent#observers>
[issue]: <https://github.com/LaraStuffs/PrimaryUUID/issues>
