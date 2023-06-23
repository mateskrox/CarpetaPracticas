<?php
  //EJERCICIO 1
  //FUNCION QUE RECIBA UN ARRAY NUMERICO Y CALCULE LA
  //SUMA DE TODOS LOS ELEMENTOS

  $listaElementos=[10, 5, 8, 100, 3, 6]; //Defino Array

  function sumaElementos($listaElementos) { //Defino la funcion y le paso la lista de elementos
    $resultado = 0; //DEFINO VAR Rdo

    foreach($listaElementos as $lista) { //Lista seria la lista de elementos
      $resultado = $resultado + $lista; //Recorro por cada uno de los elementos y lo sumo
       //Una forma de escribirlo mas abreviado es
      // $resultado += $lista;
    }

    return $resultado; //Devuelvo el rdo
  } //Cierra funcion

  $resultadoSuma = sumaElementos($listaElementos); //la var rdoSuma llama la funcion

 echo $resultadoSuma; //Muestro la suma
?>