<?php
$array = array(23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5,61);
arsort($array);
$cuenta = 0;
echo'Los 3 mayores valores son: '.'<br>';
foreach($array as $primeros_tres){
    echo $primeros_tres.'<br>';
    $cuenta++;
    if($cuenta == 3){
$cuenta = 0;
        exit();
    }
}  
?>
