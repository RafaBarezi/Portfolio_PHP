<?php

echo "<h1>Instrução while</h1>";

echo "Tais estruturas também podem ser chamadas de:
<ul>
<li>iteração</li>
<li>looping</li> 
<li>laço condicional</li>
<li>estrutura de repetição</li></ul<br><br>";

# Sintax while(true){};

echo"<br>Incremento:<br><br>";

$num_1 = 0;
while ($num_1 < 100) {
    $num_1 = ($num_1 + 10); # de 10 em 10;
    echo $num_1 . '<br>';
}

echo"<br>Decremento:<br><br>";

$num_2 = 100;
while ($num_2 > 0) {
    $num_2 = ($num_2 - 10); # de 10 em 10;
    echo $num_2 . '<br>';
}
