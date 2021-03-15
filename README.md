# template-bot-php

A bot poker implementation.

PHP client for [Bot Poker](https://botpoker.herokuapp.com/about).

Developer? Check the [wiki](https://botpoker.herokuapp.com/wiki).

## How to run on localhost

Clone this repository on your pc, and executed the commands below:

```
cd path/to/this/repo
php -r "readfile('https://getcomposer.org/installer');" | php
php composer.phar install
php -S localhost:8080 -t ./ ./index.php
```
