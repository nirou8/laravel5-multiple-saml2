## Laravel 5 - Multiple - Saml2

A Laravel package for Saml2 integration as a SP (service provider) based on  [OneLogin](https://github.com/onelogin/php-saml) toolkit.

The aim of this library is to be as simple as possible.


## Installation - Composer

You can install the package via composer:

```
composer require nadhir/laravel5-multiple-saml2
```

If you are using Laravel 5.5 and up, the service provider will automatically get registered.

For older versions of Laravel (<5.5), you have to add the service provider and alias to config/app.php:

```php
'providers' => [
        ...
    	Nirou\Saml2\Saml2ServiceProvider::class,
]

'alias' => [
        ...
        'Saml2' => Nirou\Saml2\Facades\Saml2Auth::class,
]
```

Then publish the config file with `php artisan vendor:publish`. This will add the file `app/config/saml2_settings.php`. This config is handled almost directly by  [OneLogin](https://github.com/onelogin/php-saml) so you may get further references there, but will cover here what's really necessary. There are some other config about routes you may want to check, they are pretty straightforward.

### Configuration

Once you publish your saml2_settings.php to your own files, you need to configure your sp and IDP (remote server). The only real difference between this config and the one that OneLogin uses, is that the SP entityId, assertionConsumerService url and singleLogoutService URL are injected by the library. They are taken from routes 'saml_metadata', 'saml_acs' and 'saml_sls' respectively.

Remember that you don't need to implement those routes, but you'll need to add them to your IDP configuration. For example, if you use simplesamlphp, add the following to /metadata/sp-remote.php


You can check that metadata if you actually navigate to 'http://laravel_url/saml2/metadata'