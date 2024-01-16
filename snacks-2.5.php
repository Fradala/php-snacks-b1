<?php
    
    if(isset($_GET['valore1']) && isset($_GET['valore2'])) {
        
        $valore1 = $_GET['valore1'];
        $valore2 = $_GET['valore2'];

        
        if(is_numeric($valore1) && is_numeric($valore2)) {
            
            $media = ($valore1 + $valore2) / 2;
            echo "La media di $valore1 e $valore2 è: $media";
        } else {
            echo "Inserisci valori numerici validi.";
        }
    } else {
        echo "Inserisci entrambi i valori.";
    }
?>






<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>media-voto</title>
</head>
<body>

    <form action="snacks-2.5.php" method="GET">
        <label for="valore1">Inserisci il primo valore:</label>
        <input type="text" name="valore1" id="valore1">

        <label for="valore2">Inserisci il secondo valore:</label>
        <input type="text" name="valore2" id="valore2">

        <button type="submit">Calcola Media</button>
    </form>
    
</body>
</html>