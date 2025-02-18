<?php

// Definindo, incluindo, alterando e excluindo elementos das arrays

# Definindo elementos:
$arr = ["zero","um","dois","trкs","quatro"];

# Adicionando elementos:
$arr [] = "cinco"  ;
$arr [] = "seis";
// ou $arr[6] = "seis"; 

# Alterando elementos:
$arr[1] = "hum";

# Excluindo elementos:
//esta й a funзгo do php que deleta o objeto da memуria
unset($arr[6]);     
print_r($arr);