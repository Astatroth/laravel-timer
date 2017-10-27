# laravel-timer
<a href="https://packagist.org/packages/astatroth/laravel-timer"><img src="https://poser.pugx.org/astatroth/laravel-timer/d/total.svg" alt="Total Downloads"></a>

A small tool to measure operations execution time.

# Installation
```
composer require "astatroth/laravel-timer":"dev-master"
```
Add the service provider ...
```php
Astatroth\LaravelTimer\LaravelTimerServiceProvider::class,
```
or if you use Lumen
```php
Astatroth\LaravelTimer\LumenTimerServiceProvider::class,
```
... and facade:
```php
'Timer' => Astatroth\LaravelTimer\Timer::class,
```

# Usage
Just start the Timer with
```php
Timer::timerStart('timer-name');
```
>If you start and stop the same timer multiple times, the measured intervals will be accumulated.

Reading specified timer current time:
```php
Timer::timerRead('timer-name);
```
Stop the timer:
```php
Timer::timerStop('timer-name');
```

Have fun! ;)
