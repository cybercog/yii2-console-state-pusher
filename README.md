Отправка сообщений из консольных приложений для вывода в real-time
==================================================================
Менеджер отправки real-time сообщений из консольного приложения и вывод их во фронте

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist insolita/yii2-console-state-pusher "*"
```

or add

```
"insolita/yii2-console-state-pusher": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \insolita\statepusher\AutoloadExample::widget(); ?>```