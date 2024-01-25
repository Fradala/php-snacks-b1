<?php

class Pokemon {
    public $nome;
    public $tipo;
    public $livello;
    public $saluteMassima;
    public $attacco;


    public function __construct($nome, $tipo, $livello, $saluteMassima, $attacco) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->livello = $livello;
        $this->saluteMassima = $saluteMassima;
        $this->attacco = $attacco;

    }
    public function attacca($avversario) {
        $damage = $this->attacco * 2;
        $avversario->subisciDanno($damage);
        echo "{$this->nome} attacca {$avversario->getNome()} e infligge {$damage} danni!\n";
    }


    public function subisciDanno($damage) {
        $this->saluteMassima -= $damage;
        if ($this->saluteMassima < 0) {
            $this->saluteMassima = 0;
        }
        echo "{$this->nome} subisce {$damage} danni. Salute attuale: {$this->saluteMassima}\n";
    }

    public function cura($quantita) {
        $this->saluteMassima += $quantita;
        echo "{$this->nome} è curato di {$quantita} punti. Salute attuale: {$this->saluteMassima}\n";
    }

    
    public function getNome() {
        return $this->nome;
    }
}