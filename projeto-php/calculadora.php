<?php

include ('index.php');

$campo1 = $_POST['tde1'];
$campo2 = $_POST['tde2'];
$campo3 = $_POST['tde3'];
$campo4 = $_POST['tde4'];
$campo5 = $_POST['avp1'];
$campo6 = $_POST['avp2'];

$resultado = (0.4 * $campo5) + (0.4* $campo6) + 0.05 * ($campo1 + $campo2 + $campo3 + $campo4);
echo "Sua media final é: ",$resultado, "<br/>" ;

 if ($resultado >= 7 && $resultado < 10){
   echo " Voce esta Aprovado!";
 }
 if ($resultado >= 4 && $resultado < 7){
   echo " Voce esta na Avf!";
 }
 if ($resultado < 4 ){
   echo " Voce esta Reprovado!";
 }
 if ($resultado > 10 ){
   echo "\n \n XXXXXXXXXXXXXX ERROR 404 XXXXXXXXXXXXXX";
 }

?>