<?php

echo"<h1>Tipos de dados</h1>";
 

Echo"

<ul>
<li>Tipo lógico >>> boolean (condicional - true ou false);</li>
 
<li>Tipo texto >>> string (todo caractere, a maior parte das informações manipulável);</li>
 
<li>Tipo inteiro >>> interger (todo n° inteiro, exceto n° muito grandes, que são automaticamente transformados em float);</li>
 
<li>Tipo ponto flutuante >>> float (todo n° decimal e fração, é capaz de armazenar um n° muito maiores);</li>
 
<li>Tipo array >>> array (é como uma lista de informações, uma estrutura parecida com o tipo dicionário);</li>
 
<li>Objetos >>> objects (execução de uma classe, que é o projeto do objeto. Objeto é uma instância desta classe, a execução deste projeto);</li>
 
<li>Recursos >>> resource (tudo o que não puder ser incluído nas categorias anteriores, como imagens, arquivos mp3, dados binários.</li>
</ul>";

 echo"A função gettype nos diz qual é o tipo da variável:<br><br>";
 
  $str = "eXcript";
  echo gettype($str);
  echo "<br>";
  $num = 10;
  echo gettype($num);
  echo "<br>";
  $dinheiro = 1500.32;
  echo gettype($dinheiro);
  echo "<br>";
  $bool = true;
  echo gettype($bool);