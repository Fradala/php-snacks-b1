<?php


if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {

    
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    
    if (strlen($name) > 3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && is_numeric($age)) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }

} else {
    echo "Parametri mancanti";
}

?>


<form action="snacks-2.php" method="get">
    <label for="name">Nome:</label>
    <input type="text" name="name" required>
        
    <label for="mail">Email:</label>
    <input type="text" name="mail" required>
        
    <label for="age">Età:</label>
    <input type="text" name="age" required>
        
    <button type="submit">Invia</button>
</form>