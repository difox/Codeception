# Doctrine1 Module

Performs DB operations with Doctrine ORM 1.x

Uses active Doctrine connection. If none can be found will fail.

This module cleans all cached data after each test.

## Config
* cleanup: true - all doctrine queries will be run in transaction, which will be rolled back at the end of test.


## Actions


### dontSeeInTable


Checks table doesn't contain row with specified values
Provide Doctrine model name and criteria that can be passed to addWhere DQL

Example:

``` php
<?php
$I->dontSeeInTable('User', array('name' => 'Davert', 'email' => 'davert@mail.com'));

```

 * param $model
 * param array $values


### grabFromTable


Fetches single value from a database.
Provide Doctrine model name, desired field, and criteria that can be passed to addWhere DQL

Example:

``` php
<?php
$mail = $I->grabFromTable('User', 'email', array('name' => 'Davert'));

```

 * param $model
 * param $column
 * param array $values
 * return mixed


### seeInTable


Checks table contains row with specified values
Provide Doctrine model name can be passed to addWhere DQL

Example:

``` php
<?php
$I->seeInTable('User', array('name' => 'Davert', 'email' => 'davert@mail.com'));

```

 * param $model
 * param array $values
