<?php
// https://laravel.com/docs/5.7/collections
require './vendor/autoload.php';

$products = [
    [
        'name' => 'cola',
        'price' => 20
    ],
    [
        'name' => 'chips',
        'price' => 30
    ]
];

$sumPrice = collect($products)->sum('price');
$avgPrice = collect($products)->avg('price');

dump([
    'sum' => $sumPrice,
    'avg' => $avgPrice
]);
