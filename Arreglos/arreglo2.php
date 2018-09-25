<?php
$Paises = array('Mexico'=>'Monterrey, '.'Queretaro, '.'Guadalajara.'
,'Colombia'=>'Bogota, '.'Cartagena, '.'Medellin.'
,'Peru'=>'Lima, '.'Cuzco, '.'Piura.'
,'Argentina'=>'Buenos Aires, '.'Salta, '.'Santa Fe.'
  ,'Brasil'=>'Manaos, '.'Recife, '.'Porto Alegre. ');
foreach($Paises as $Pais=>$ciudad)
{
echo $Pais. ": " . $ciudad.'<br>';
}
?>
