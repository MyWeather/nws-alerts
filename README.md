National Weather Service Alerts
==================

The National Weather Service Alerts was created by, and is maintained by [Tyler Youschak](http://tjyouschak.me). National Weather Service Alerts (NWS Alerts) uses the [National Weather Service](http://alerts.weather.gov/)'s alert RSS feed, to get the latest alerts. All API calls perfomed by this package are free, and no API key is required. NOTE: This could change at any time, depending on the NWS.


## Installation

To get the latest version of NWS Alerts, simply add the following line to the require block of your `composer.json` file:

```
"myweather/nws-alerts": "~1.0@dev"
```

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

If you're using Laravel 5, then you can register our service provider. Open up `config/app.php` and add the following to the `providers` array.

* `'MyWeather\NwsAlertsServiceProvider'`


## Usage

Usage of MyWeather Forecast is quite simple. To get started, you must first _use_ our package. This will allow you to start using our package, here's an example: `use MyWeather\NwsAlertsClient;`

... More documentation will come in the future on how to use this package.

## Contribute
Have an idea of a new data selector that should be added? Or do you have an idea that will make this package even better? Open an issue report, and we'll have a gander!
