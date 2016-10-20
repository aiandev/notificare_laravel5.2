# Notificare PHP Server-Side Library

Use this PHP Library to implement the Notificare Push API public resources in your own applications.


You can check by running diagnostics from the command line:

	php diag.php
	
On some installations (e.g., Windows), you need to point to a CA certificate bundle 


## Installation

## More help

For documentation please refer to: https://notificare.atlassian.net/wiki/display/notificare/Home

For support please use: https://notificare.zendesk.com

```php
use Aiandev\Notificarelaravel5\NotificareServiceProvider::class,

## Requirements
- [PHP 5.5.9 or later](http://php.net/)
- [Laravel 5.2 or later](https://github.com/laravel/framework)
- cURL + SSL

## Documentations
- You will find user friendly and updated documentation in the wiki here: [Laravel Datatables Wiki](https://github.com/yajra/laravel-datatables/wiki)
- You will find the API Documentation here: [Laravel Datatables API](http://yajra.github.io/laravel-datatables/api/)
- [Demo Application](http://datatables.yajrabox.com) is available for artisan's reference.

## Quick Installation
`composer require yajra/laravel-datatables-oracle:~6.0`

#### Service Provider
`Yajra\Datatables\DatatablesServiceProvider::class`

#### Facade
`Datatables` facade is automatically registered as an alias for `Yajra\Datatables\Facades\Datatables` class. 

#### Configuration and Assets
`$ php artisan vendor:publish --tag=datatables`

And that's it! Start building out some awesome DataTables!

## Upgrading from v5.x to v6.x
  - Change all occurrences of `yajra\Datatables` to `Yajra\Datatables`. (Use Sublime's find and replace all for faster update). 
  - Remove `Datatables` facade registration.
  - Temporarily comment out `Yajra\Datatables\DatatablesServiceProvider`.
  - Update package version on your composer.json and use `yajra/laravel-datatables-oracle: ~6.0`
  - Uncomment the provider `Yajra\Datatables\DatatablesServiceProvider`. 

## Debugging Mode
To enable debugging mode, just set `APP_DEBUG=true` and the package will include the queries and inputs used when processing the table.

**IMPORTANT:** Please make sure that APP_DEBUG is set to false when your app is on production.

## Contributing

Please see [CONTRIBUTING](https://github.com/yajra/laravel-datatables/blob/master/.github/CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email [aqangeles@gmail.com](mailto:aqangeles@gmail.com) instead of using the issue tracker.

## Credits

- [Arjay Angeles](https://github.com/yajra)
- [bllim/laravel4-datatables-package](https://github.com/bllim/laravel4-datatables-package)
- [All Contributors](https://github.com/yajra/laravel-datatables/graphs/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/yajra/laravel-datatables/blob/master/LICENSE.md) for more information.

## Buy me a beer
<a href='https://pledgie.com/campaigns/29515'><img alt='Click here to lend your support to: Laravel Datatables and make a donation at pledgie.com !' src='https://pledgie.com/campaigns/29515.png?skin_name=chrome' border='0' ></a>
