<h2 class="titulo">Interface</h2>

<?php

interface Animal {
    function respirar();
}
interface Canino extends Animal{
    function latir(): string; // Esse tipo de função vai retornar apenas valores do tipo "STRING".
}

class Cachorro implements Canino {
    function respirar() {
        echo 'Irei usar oxigênio!<br>';
    }
    function latir(): string {
        return 'Au Au <br>';
    }
}
// interface Canino {
//     function latir(): string; // Esse tipo de função vai retornar apenas valores do tipo "STRING".
// }

// class Cachorro implements Animal, Canino {
//     function respirar() {
//         echo 'Irei usar oxigênio!<br>';
//     }
//     function latir(): string {
//         return 'Au Au <br>';
//     }
// }

$pet1 = new Cachorro();
$pet1->respirar();
echo $pet1->latir();