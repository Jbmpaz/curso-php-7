<h2 class="titulo">Desafio String</h2>

<?php


echo '
<h2>Enuncioado</h2>
<p>Procurar na documentação do PHP uma função/Método que retorne 1 quando achar o texto \'abc\' na string \'!AbcaBcabc\'</p>
<br>
';

echo strpos( '!AbcaBcabc', 'abc'), ' - strpos() <br>';

echo str_contains( '!AbcaBcabc', 'abc'), ' - str_contains() <br>';


echo 'Usado a função stripos() pelo professor';