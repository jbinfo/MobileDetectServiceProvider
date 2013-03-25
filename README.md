MobileDetectServiceProvider
===========================

A mobile detect ServiceProvider for Silex, based on Mobile-Detect library.

## Fetch

The recommended way to install MobileDetectServiceProvider is [through composer](http://getcomposer.org).

Just create a composer.json file for your project:

```JSON
{
    "require": {
        "binfo/mobile-detect-service-provider": "1.0.*@dev",
        "silex/silex": "1.0.*@dev"
    }
}
```

## Register

```PHP
use Silex\Application;
use Binfo\Silex\MobileDetectServiceProvider;

$app = new Application();

$app->register(new MobileDetectServiceProvider());
```

## Usage

```PHP
if ($app["mobile_detect"]->isMobile()) {
    echo "Mobile device";
    
} else {
    echo "Desktop device";
}
```

```PHP
echo $app["mobile_detect"]->version('iPad');
```


For more informations check the website of [Mobile-Detect library](http://mobiledetect.net/).
