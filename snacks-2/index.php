<?php

class Persona {
    private $age;

    public function setAge($newAge) {
        
        if (!is_int($newAge)) {
            
            throw new InvalidArgumentException("L'età deve essere un numero intero.");
        }

      
        $this->age = $newAge;
    }

    public function getAge() {
        return $this->age;
    }
}


$persona = new Persona();

try {
    $persona->setAge(25);
    echo "Età: " . $persona->getAge();

    
    $persona->setAge('dd');
    
} catch (InvalidArgumentException $e) {
    echo "Errore: " . $e->getMessage();
}
?>