<h2 class="titulo">Tipo Booleano</h2>

<?php

echo true, ' <= true <br>';

echo false, ' <= false <br>';

echo var_dump(true);
echo '<br>';

echo var_dump(false);
echo '<br>';

echo var_dump('false');
echo '<br>';

echo is_bool(false), ' <= true <br>';
echo is_bool(true), ' <= true <br>';
echo is_bool('true'), ' <= false <br>';


echo 'Fazer as Regras de Conversões', '<br>';

echo var_dump((bool) 0), '<br>'; // Qualquer número que não for zero é TRUE

echo var_dump((bool) -1), '<br>';
echo var_dump((bool) 20), '<br>';
echo var_dump((bool) 0.0), '<br>';
echo var_dump((bool) 0.2), '<br>';
echo var_dump((bool) ''), '<br>'; // FALSE
echo var_dump((bool) '0'), '<br>'; // FALSE
echo var_dump((bool) ' '), '<br>';
echo var_dump((bool) '00'), '<br>';
