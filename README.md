# laravel-timer
A small tool to measure operations execution time.

#Installation
```
composer require astatroth/laravel-timer
```
Add the service provider ...
```php
Astatroth\LaravelTimer\LaravelTimerServiceProvider::class,
```
... and facade:
```php
'Timer' => Astatroth\LaravelTimer\Timer::class,
```

# Usage
Just start the with
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
