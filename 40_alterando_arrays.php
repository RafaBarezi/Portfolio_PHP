<?php

// Definindo, incluindo, alterando e excluindo elementos das arrays

# Definindo elementos:
$arr = ["zero","um","dois","tr�s","quatro"];

# Adicionando elementos:
$arr [] = "cinco"  ;
$arr [] = "seis";
// ou $arr[6] = "seis"; 

# Alterando elementos:
$arr[1] = "hum";

# Excluindo elementos:
//esta � a fun��o do php que deleta o objeto da mem�ria
unset($arr[6]);     
print_r($arr);