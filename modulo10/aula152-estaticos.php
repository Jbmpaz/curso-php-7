<h2 class="titulo">Membros Estáticos</h2>

<?php

class A
{
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA()
    {
        echo 'Não estático: ' . $this->naoStatic . "<br>";

        // echo $this->static . "<br>";
        echo 'Estático: ' . self::$static . "<br>";
    }

    public static function mostrarStaticA()
    {
        echo 'Não estático: ' . self::$static . " Opa!!!<br>";
    }
}

$objetoA = new A();

// $objetoA->mostrarA();
// $objetoA->mostrarStaticA();

A::mostrarStaticA();
echo A::$static;