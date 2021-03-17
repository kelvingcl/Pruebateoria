<?php
$numeros=array(7,10,0,9,11,0,17);
$valores=array();

$num= $numeros;
for($i = 0; $i < count($numeros); $i++){
    if($numeros[$i]==0){
        array_push($valores,$numeros[$i]);
        unset($numeros[$i]);
    }
}

for($i = 0; $i < count($valores); $i++){
    array_push($numeros, $valores[$i]);
}

var_dump($numeros);


?>