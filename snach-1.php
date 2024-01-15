<?php

$partite = [
    [
        "squadra" => ["Milano", 99, "Como", 88],
    ],
    [
        "squadra1" => ["Milano", 99, "Como", 88],
    ],

];


foreach ($partite as $key => $value) {
    echo $key . ' - ' . $value . ', ';
}

?>