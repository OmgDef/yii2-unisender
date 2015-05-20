Unisender API wrapper for yii2
==============================
Unisender API wrapper for yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist omgdef/yii2-unisender "*"
```

or add

```
"omgdef/yii2-unisender": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, you should configure it as component  :

```php
'uniSender' => [
    'class' => 'omgdef\yii\unisender\UniSender',
    'apiKey' => 'api_key',
],
```

More info https://github.com/OmgDef/unisender-wrapper
