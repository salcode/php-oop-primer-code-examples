# Object Oriented Primer: Interfaces, Traits & Inheritance - Code Examples

Code examples to go along with Sal Ferrarello's [Object Oriented Primer: Interfaces, Traits & Inheritance](https://salferrarello.com/slides/php-oop-primer/) talk.

## Overview

```
 Model (abstract)
 |__Artillery (implements Unit)
 |
 |__Tank (implements Unit with MoraleTrait)
 |  |__M18 Hellcat
 |
 |__Soldier

 Squad (Unit with MoraleTrait)
  a collection of Soldiers
```

## Running PHPUnit Tests

### Install PHPUnit

From the command line in the root of this project, run

```
composer install
```

If you don't have Composer installed, see [instructions on downloading Composer](https://getcomposer.org/download/).

### Run PHPUnit

From the command line in the root of this project, run

```
./vendor/bin/phpunit
```

**Note** All PHPUnit configuration is done via the `phpunit.xml.dist` file in the root of this project.

