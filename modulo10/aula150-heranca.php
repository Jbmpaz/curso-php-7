<h2 class="titulo">Herança</h2>

<?php

class Animal {
    public $especie;
    public $idade;

    function __construct($novaEspecie, $novaIdade)
    {
        $this->especie = $novaEspecie;
        $this->idade = $novaIdade;
    }

    function __destruct()
    {
        echo "Opa!!!<br>";
    }

    public function apresentar () {
       return "Especie: {$this->especie}, Idade: {$this->idade} anos<br>";
    }
}

class Mamifero extends Animal {
    public $tetasMamarias;

    function __construct($especie, $idade, $tetasMamarias)
    {
        $this->especie = $especie;
        $this->idade = $idade;
        $this->tetasMamarias = $tetasMamarias;
        echo "Animal definido!!!<br>";
    }

    function __destruct()
    {
        parent::__destruct();
        echo "O animal da especie {$this->especie} diz Opa!!!";
    }

    public function apresentar()
    {
        // return "Especie: {$this->especie}, Idade: {$this->idade} anos, Glândulas Mamarias: {$this->tetasMamarias}.<br>";
        echo parent::apresentar();
        return "Glândulas Mamarias: {$this->tetasMamarias}.<br>";
    }
}

$cachorro = new Mamifero('Cachorro', 12, '8');
echo $cachorro->apresentar();

unset($cachorro);