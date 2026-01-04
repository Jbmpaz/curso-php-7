<h2 class="titulo">Tipo String</h2>

<?php

echo 'Eu sou uma string', '<br>';

var_dump('Eu também');
echo '<br>';

echo 'Número: ' . 37321, '<br>';

// Concatenação
echo "Nós também" . ' somos', '<br>';

echo 'Também aceito', ' virgulas', '<br>';

echo "'Teste' " . '"Teste" ' . '\'Teste\' '. "\"Teste\" " . '\\n', '<br>';

print('<p><strong>Também existe a função print()</strong></p>');

echo('echo com ()<br>');

// Algumas funções
echo strtoupper('strtoupper'), '<br>';

echo strtolower('STRTOLOWER'), '<br>';

echo ucfirst("ucfirst"), '<br>';

echo ucwords('ucwords todas as primeiras letras serão maiusculas'), '<br>';

echo strlen('Eu também'), '<br>';

echo mb_strlen('Eu também', 'utf-8'), '<br>';

echo substr('Só uma parte', 4), '<br>';

echo str_replace('isso', 'aquilo', 'Trocar isso por aquilo'), '<br>';