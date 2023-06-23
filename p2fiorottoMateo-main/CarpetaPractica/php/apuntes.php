<?php
$aux = 33; //Defino var AUX
echo $aux; //Muestro en el PHP la variable
var_dump($aux); //METODO, tipo de dato y muestra valor

//ARRAYS 
$semana = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes']; //array string
var_dump($semana);

echo($semana[1]); //Mostrar martes (pos del array)

$cosas = ['Piedra', 35, true]; //Varios tipos de datos
var_dump($cosas);

$planetoides = []; //Def. array vacio FORMA 1

$planetas = array(); //definicion de array vacio FORMA 2
$planetas[] = 'Urano'; //agregar valores al array con la forma 2
$planetas[] = 'Tierra';
$planetas[] = 'Saturno';
$planetas[] = 'Marte';
$planetas[] = 'Neptuno';

foreach($planetas as $planeta) { 
  echo $planeta; //Recorro el array y se asigna cada valor
}

foreach($planetas as $key => $value) { //Key es el indice, value es el valor
  echo $key;
}

//FUNCIONES

function sumarNumeros($monto) {
  $valor = 5;

  $resultado = $valor + $monto;

  return $resultado;
}

$resultado = sumarNumeros(12);

echo $resultado;

/*
  echo "hola mundo";
  echo "prueba php";
  $var2 = 4;
  $var3 = 4+3;
  echo $var3;
  phpinfo();
  */
?>