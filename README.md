MobileDetectServiceProvider
===========================

A mobile detect ServiceProvider for Silex, based on Mobile-Detect library.

## Fetch

The recommended way to install MobileDetectServiceProvider is [through composer](http://getcomposer.org).

Just create a composer.json file for your project:

```JSON
{
    "require": {
        "jbinfo/mobile-detect-service-provider": "~2",
        "silex/silex": "~2"
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


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/jbinfo/mobiledetectserviceprovider/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

