<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'AuthorID' => 1,
        'Name' => $faker->name,
        'Price' => $faker->randomDigit,
        'Quantity' => $faker->randomDigit,
        'CategoryID' => $faker->numberBetween($min = 1, $max = 11),
        'StarRating' => $faker->numberBetween($min = 1, $max = 5),
        'DateOfPublication' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'Image' => $faker->randomElement($array = array('the_diary_of_a_young_girl.jpg', 'steve_jobs.jpg', 'it.jpg', 'murder_on_the_orient_express.jpg', 'the_hitchhikers_guide_to_the_galaxy.jpg')),
        'BookDescription' => $faker->text($maxNbChars = 200)
    ];
});
