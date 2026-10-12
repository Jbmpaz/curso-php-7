<h2 class="titulo">Visibilidade</h2>

<?php

class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
        echo 'Classe A) Público = ' . $this->publico, '<br>';
        echo 'Classe A) Protegido = ' . $this->protegido, '<br>';
        echo 'Classe A) Privado = ' . $this->privado, '<br>';
        
        $this->naoMostrarA();
    }
    private function naoMostrarA() {
        echo 'Function Privada <br>';
    }
    protected function vaiPassarPorHeranca() {
        echo 'Foi Herdado da Classe (A)<br>';
    }
}

$a = new A();
// echo $a->privado;
$a->mostrarA();
// $a->naoMostrarA();
// $a->vaiPassarPorHeranca();
echo 'Fim da Classe A';
echo '<br>';

class B extends A {
    public function mostrarB(){
        echo 'Classe B) Publico = ' . $this->publico . '<br>';
        echo 'Classe B) Protegido = ' . $this->protegido . '<br>';
        echo 'Classe B) Privado = ' . $this->privado . '<br>';

        parent::vaiPassarPorHeranca();
        // parent::naoMostrarA();
    }
}
echo '<br>';
$b = new B();
$b->mostrarB();
// $b->naoMostrarA();
// $b->vaiPassarPorHeranca();