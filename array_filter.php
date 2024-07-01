<?php
$albums = [
    [
        'title' => 'Starboy',
        'author' => 'The Weeknd',
        'published' => 2016,
    ],

    [
        'title' => 'Mr.Morale & The Big Steppers',
        'author' => 'Kendrick Lamar',
        'published' => 2022,
    ],

    [
        'title' => 'After Hours',
        'author' => 'The Weeknd',
        'published' => 2020,
    ],

    [
        'title' => 'Dawn FM',
        'author' => 'The Weeknd',
        'published' => 2022,
    ],
];

$albums_after_2020 = array_filter($albums, fn($a) => $a['published'] > 2020);

print_r($albums_after_2020);

$albums_before_2020 = array_filter($albums, fn($a) => $a['published'] < 2020);

print_r($albums_before_2020);

?>