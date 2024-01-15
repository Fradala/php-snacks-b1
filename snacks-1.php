<?php

$partite = [
    [
        'squadra1' => 'Milano',
        'squadra2' => 'Como',
        'punti1' => 80,
        'punti2' => 99,
    ],
    [
        'squadra1' => 'Meda',
        'squadra2' => 'Lecco',
        'punti1' => 80,
        'punti2' => 99,
    ],
    
];



?>

<ul>
    <?php foreach ( $partite as $partita) { ?>
        <li>
            <p>
                <?php echo $partita['squadra1'] . ' - ' . $partita['squadra2']. ': '. 
                $partita['punti1'] . ' - ' . $partita['punti2']; ?>
            </p>
        </li>

    <?php } ?>
</ul>