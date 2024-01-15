<?php

$partite = [
    [
        'squadra1' => 'Milano',
        'punti' => 99,
    ],
    [
        'squadra2' => 'Como',
        'punti' => 80,
    ],
    [
        'squadra3' => 'Meda',
        'punti' => 30,
    ],
    [
        'squadra4' => 'Cesano',
        'punti' => 60,
    ],
];


foreach ($partite as $key => $value) {
    echo $key . ' - ' . $value . ', ';
}

?>