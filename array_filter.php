<?php
$albums = [
    [
        'title' => 'Starboy',
        'artist' => 'The Weeknd',
        'published' => 2016,
    ],

    [
        'title' => 'Mr.Morale & The Big Steppers',
        'artist' => 'Kendrick Lamar',
        'published' => 2022,
    ],

    [
        'title' => 'After Hours',
        'artist' => 'The Weeknd',
        'published' => 2020,
    ],

    [
        'title' => 'Dawn FM',
        'artist' => 'The Weeknd',
        'published' => 2022,
    ],

    [
        'title' => 'DAMN',
        'artist' => 'Kendrick Lamar',
        'published' => 2017
    ],

    [
        'title' => 'SMILE BIX :)',
        'artist' => 'Rels B',
        'published' => 2016,
    ],
];



$albums_after_2020 = array_filter($albums, fn($a) => $a['published'] > 2020);

print_r($albums_after_2020);

echo '<br><br>';

$albums_before_2020 = array_filter($albums, fn($a) => $a['published'] < 2020);

print_r($albums_before_2020);

echo '<br><br>';

$albums_by_theweeknd = array_filter($albums, fn($a) => $a['artist'] === 'The Weeknd');

print_r($albums_by_theweeknd);

echo '<br><br>';


?>