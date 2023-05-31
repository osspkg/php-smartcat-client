# osspkg/php-smartcat-client  (unofficial)

PHP client for [SmartCAT API](https://developers.smartcat.com/getting-started/#getting-started)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/osspkg/php-smartcat-client.git"
    }
  ],
  "require": {
    "osspkg/php-smartcat-cli": "*@dev"
  }
}
```

Then run `composer install`
