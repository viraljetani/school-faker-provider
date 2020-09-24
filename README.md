# school-faker-provider #

This is a Faker (fzaninotto/Faker) provider to generate random school names.

### Installation ###

Using Composer:
```composer require melz/school-faker-provider```

### Usage ###

```php
<?php
include_once(__DIR__ . "/path/to/vendor/autoload.php");

$faker = \Faker\Factory::create();
$faker->addProvider(new \Faker\Provider\School($faker));

echo $faker->school;
```