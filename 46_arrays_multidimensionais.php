<?php

//  Arrays Multidimensionais

/*

Bancos de dados tratam de arrays multidimencionais 

  ID  |  NOME  |  PONTOS  |
  1   |   Zé   |    11    |
  2   |  José  |    4     |
  3   |  Zeca  |    22    |

Podemos trabalhar assim : 
 
$jogo = array(
    array(
        "ID" => 1,
        "NOME" => "Zé",
        "PONTOS" => 11
    ),
    array(
        "ID" => 2,
        "NOME" => "José",
        "PONTOS" => 4
    ),
    array(
        "ID" => 3,
        "NOME" => "Zeca",
        "PONTOS" => 22
    )
);

Ou assim :

*/

$jogo = [
    [
        "ID" => 1,
        "NOME" => "Zé",
        "PONTOS" => 11
    ],
    [
        "ID" => 2,
        "NOME" => "José",
        "PONTOS" => 4
    ],
    [
        "ID" => 3,
        "NOME" => "Zeca",
        "PONTOS" => 22
    ]
];

print_r($jogo);
// echo $jogo[1][1];
// echo $jogo[1]["NOME"];