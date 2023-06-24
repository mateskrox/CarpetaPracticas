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
    <input type="submit" class="button" name="sumaDeElementos" value="Sumar ARRAY (Ej 1)">
    <input type="submit" class="button" name="ordenAscendente" value="Ordenar ARRAY (Ej 2)">
    <input type="submit" class="button" name="quitarRepetidos" value="Quitar REPETIDOS (Ej 3)">
    <input type="submit" class="button" name="buscarIndices" value="Buscar indices (Ej 4)">
    <input type="submit" class="button" name="combinarImpares" value="Buscar impares en dos arrays (Ej 5)">
    <input type="submit" class="button" name="arrayDimensional" value="Mostrar si juega en river, y en que club(Ej 6-7)">
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
      echo ", ";
    }
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
      echo ", ";
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

    //EJERCICIO 4: Buscar indices del valor
    /*Descripcion: CREAR UNA FUNCION QUE RECIBA UN ARRAY Y
                  UN VALOR A BUSCAR Y DEVUELVA UN NUEVO ARRAY
                  CON LOS INDICES DE TODAS LAS OCURRENCIAS DEL VALOR
                  EN EL ARRAY ORIGINAL --> array_keys()*/
    if(isset($_POST['buscarIndices'])) {
      echo "Ejercicio 4";
      echo "<br>";
      $listaValores = [4,4,5,6,5,3,2,1,1,5,4,4,8,4,9,9,4];
      $valor = 4;

      $indices = array_keys($listaValores, $valor);

      forEach ($indices as $indice) {
        print_r($indice);
        echo ", ";
      }
    }

    //COMENTARIOS
  /*Linea 125 --> uso array keys que devuelve un array
                  con los indices que tengan ese valor
    Linea 128 --> muestro el resultado

     //EJERCICIO 5: Combinacion de array --> array_merge
    /*Descripcion: Escribe una funcion que combine
                    dos array en uno solo
                    buscar en el array resultante
                    los numeros impares*/
    if(isset($_POST['combinarImpares'])) {
      echo "Ejercicio 5";
      echo "<br>";
      $arrayUno =  [1,5,9,4];
      $arrayDos = [2,5,6,7];
      $mezclaArrays = array_merge($arrayUno, $arrayDos);

      foreach($mezclaArrays as $mezcla) {
        if ($mezcla%2 != 0) {
          echo $mezcla;
          echo ", ";
        }
      }
    }

  //COMENTARIOS
  /*Linea 148 --> mezcla los dos array y devuelve otro
  Linea 151 --> si el resto del numero es distinto de 0
              que lo muestre

    ARRAYS ASOCIATIVOS*/
    if(isset($_POST['arrayDimensional'])) {
    $Clubes = [
      "River" => 
            [
              "Jugadores" => [
              "Armani",
              "Borja",
              "Pratto"
            ] 
    ], 
        "Boca" => 
                ["Jugadores" =>[ 
                  "Advincula",
                  "Barco",
                  "Villa"]
        ]
      ];

      $jugadoresRiver = $Clubes["River"]["Jugadores"];
      $Jugador="Barco";
      //COMENTARIOS
      /* Linea 166 --> defino el array multidimensional
         Linea 167 --> Defino la Clave River
         Linea 169 --> Defino la clave Jugadores
         Linea 170-172 --> Defino los valores del array
         Linea 183 --> defino un acceso facil 
      */

      //EJERCICIO 6
      //Comprobar si el jugador juega en river 
      if(in_array($Jugador, $jugadoresRiver)) {
        echo "Juega en river";
      } else {
        echo "No juega en river";
      }
      echo "<br>";

      //COMENTARIOS
      /* Linea 195-198 --> si en el array el jugador esta incluido 
                       en los jugadores de river que diga que si
                       sino, no
      */

      //EJERCICIO 7
      //COMPROBAR EL CLUB EN EL QUE JUEGA EL JUGADOR
      foreach ($Clubes as $club => $datos) {
        $jugadores = $datos["Jugadores"];
        if (in_array($Jugador, $jugadores)) {
            echo "El jugador juega en " . $club;
            break;
        }
    }
     //COMENTARIOS
      /* Linea 210 --> Por cada uno de los clubes le paso la
                       variable DATOS que representa el valor
                       asociado a la clave en el arreglo 
                       Explicado de mejor forma, seria que
                       club contiene a river y boca y datos
                       contiene a jugadores
          Linea 211 --> asigno a los jugadores (en este caso
                        seria como acceder a $clubes["River"]["Jugadores])
                        pero sirve para recorrer las dos claves en el foreach
          En las lineas siguientes compruebo donde esta el jugador dentro del array
          de jugadores y muestro el nombre del club.
      */
  }
?>
