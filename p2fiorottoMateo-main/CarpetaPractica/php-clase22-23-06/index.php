<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form method="POST">
  <p>Seleccione un boton</p>
  <br>
    <input type="submit" class="button" name="sumaDeElementos" value="Sumar ARRAY">
    <input type="submit" class="button" name="ordenAscendente" value="Ordenar ARRAY">
    <input type="submit" class="button" name="quitarRepetidos" value="Quitar REPETIDOS">
  </form>
</body>
</html>
<!-- De las lineas 1-17 tenemos todo el codigo HTML:

    Linea 9 -> El codigo debe ir dentro de un FORM 
    donde le pasamos el METHOD post
                para que mande la informacion al PHP
    Lineas 12,13,14 -> a un INPUT tipo submit les asigno
                        el nombre para que despues se
                        lo pueda mandar al PHP
  -->


<?php
  //Linea 29 --> Etiqueta de apertura PHP y Linea 112 --> cierre PHP

  //EJERCICIO 1: Suma de Numeros
  //Descripcion: escribir una funcion que reciba un array numerico y sume todos sus elementos.
  if(isset($_POST['sumaDeElementos'])) {
    echo "Ejercicio 1" .'<br>';
    $listaElementos=[10, 5, 8, 100, 3, 6];

    function sumaElementos($listaElementos) {
      $resultado = 0; 
      foreach($listaElementos as $lista) {
        $resultado = $resultado + $lista;
      }
      return $resultado;
  } 
  $resultadoSuma = sumaElementos($listaElementos) .'<br>' .'<br>' ; 
  echo $resultadoSuma;
}
  //COMENTARIOS
  /*Linea 34 --> si se apreta el boton de SUMA entonces que haga lo siguiente. (PASO OPCIONAL)
    Linea 35 --> Se pone "ejercicio 1" en la pagina y da un salto de linea
    Linea 36 --> Defino Array
    Linea 38 --> Defino la funcion y le paso el array previamente definido
    Linea 39 --> Defino VAR resultado (para inicializarla)
    Linea 40 --> forEach/Por cada uno de la lista de elementos
    Linea 41 --> A la variable resultado le sumo el resultado y cada uno de los elementos
    NOTA: una forma de abreviarlo seria $resultado += $lista;
    Linea 42 --> cierro el foreach
    Linea 43 --> devuelvo el resultado
    Linea 44 --> cierro la funcion
    Linea 45 --> Al resultado de la Suma le asigno la funcion, llamandola, y le paso los valores, dando dos saltos de linea
    Linea 46 --> Muestro resultado
    Linea 47 --> Cierro el IF (PASO OPCIONAL)
    */

  //EJERCICIO 2: Ordenamiento Ascendente
  //Descripcion: ordenar un array numerico en orden ascendente.
  if(isset($_POST['ordenAscendente'])) {
    echo "Ejercicio 2";
    echo "<br>";
    $listaElementos2 = [25,40,70,1,33,9,2,10,5,100];
    sort($listaElementos2);
  
    foreach ($listaElementos2 as $elementos2) {
      echo $elementos2;
      echo "<br>";
    }
    echo"<br>";
  }
   //COMENTARIOS
  /*Linea 67 --> si se apreta el boton de ORDENAR entonces que haga lo siguiente. (PASO OPCIONAL)
  NOTA: VOY A OBVIAR TODOS LOS ECHO, YA QUE LO QUE HACEN ES MOSTRAR EL CONTENIDO EN LA PAGINA
    Linea 70 --> Defino array con elementos desordenados
    Linea 71 --> uso la funcion sort que ordena la funcion en orden ASCENDENTE.
    NOTA: En caso de querer ordenarlo de forma descendente, usaremos la funcion "rsort"
    Linea 73 --> Abro ForEach y asigno los elementos de la lista a la variable $elementos2
    Linea 74,75--> Muestro los elementos y doy un salto de linea por c/u
    Linea 76 --> Cierro For each
    Linea 78 --> Cierro el IF (PASO OPCIONAL)
    */
  
  //EJERCICIO 3: Array Unique
  //Descripcion: escribir una funcion que elimine elementos duplicados en un Array.
  if(isset($_POST['quitarRepetidos'])) {
    echo "Ejercicio 3";
    echo "<br>";
    $listaElementos3 = [100,100,3,5,5,5,9,1,3,6,88,5,587,77,1,0,3];
    $elementosUnicos = array_unique($listaElementos3);

    foreach ($elementosUnicos as $elementosUnicosMostrar) {
      echo $elementosUnicosMostrar;
      echo "<br>";
    }
  }
  //COMENTARIOS
  /*Linea 93 --> si se apreta el boton de ELIMINAR REPETIDOS entonces que haga lo siguiente. (PASO OPCIONAL)
    Linea 96 --> Defino array con elementos duplicados
    Linea 97 --> a una variable, le asigno la funcion array_unique y le paso los elementos del array
    Linea 99 --> Abro ForEach
    Linea 102 --> Cierro For each
    Linea 103 --> Cierro el IF (PASO OPCIONAL)
    */
?>