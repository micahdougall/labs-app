<?php

$cars = [
    "Honda" => ["Civic", "CRV", "Jazz", "Accord"],
    "Toyota" => ["Prius", "Avensis", "Rav4"],
    "Ford" => ["Escort", "Mondeo", "Fiesta", "Focus"],
    "BMW" => ["320", "535", "M4", "Z3"]
];

foreach (range(0, 20) as $_) {
//    $make = array_rand($cars);
//    $model = $cars[$make][array_rand($cars[$make])];
//    printf("make: %s\n", $make);
//    printf("model: %s\n", $model);;

    $ns = array('British', 'French', 'German', 'Russian', 'Spanish');
    $r = array_rand($ns, rand(1, count($ns)));

//    print_r($ns);
    print_r($r);
}
