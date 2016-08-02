Yii2 Exchange Rates
===================
This Yii2 extension for exchange rates for currency.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist avsdevelop/yii2-exchangerates "*"
```

or add

```
"avsdevelop/yii2-exchangerates": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \yii2avs\exchangerates\widgets\ExchangeRates::widget(['currency'=>[
    'USDUAH',
    'EURUAH',
]) ?>
```

Demo
----
