<?php

require './vendor/autoload.php';

echo 'Hello world!';

$collection = collect([
    [
        'name' => 'Ilya',
        'age' => 18
    ],
    [
        'name' => 'Andrey',
        'age' => 20
    ]
]);

$collection = $collection->sortByDesc('age')->groupBy('name');

dump($collection->toArray());
