# Simple Laravel Action

This is a simple Laravel action service for controllers.

## Installation

```bash
composer require ronssij/laravel-actions
```

## Usage

```artisan
php artisan make:action YourActionClass
```

This command will generate a specific file on the default folder ``App\Actions``

```php

namespace App\Actions;

class YourActionClass
{
    /**
     * Execute the action and return a result.
     *
     * @return mixed
     */
    public function execute () {
        // Execute the action.
    }
}
```

## License
[MIT](https://choosealicense.com/licenses/mit/)