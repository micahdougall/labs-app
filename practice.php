<?php

$cars = [
    "Honda" => ["Civic", "CRV", "Jazz", "Accord"],
    "Toyota" => ["Prius", "Avensis", "Rav4"],
    "Ford" => ["Escort", "Mondeo", "Fiesta", "Focus"],
    "BMW" => ["320", "535", "M4", "Z3"]
];

foreach (range(0, 1) as $_) {
    $make = array_rand($cars);
    $model = $cars[$make][array_rand($cars[$make])];
//    $a = arr

//    print($a);
    printf("make: %s\n", $make);
    printf("model: %s\n", $model);;

//    print_r($cars[$make]);

//    $model = $cars(array_rand(array_keys($cars[$make])));
//
}


