<?php

/*
Una función con parámetros en PHP es una estructura que permite definir 
un bloque de código reutilizable que puede recibir valores externos para
su procesamiento. Los parámetros son variables que se declaran en la 
definición de la función y se utilizan para recibir los valores proporcionados
al llamar a la función. Estos valores pueden ser utilizados dentro del cuerpo
de la función para realizar operaciones específicas.
*/


// Ejemplo de función con parámetros

function es_premium($rank){  //la estructura de la función es la misma que la de una función normal y rank es el parámetro que recibe la función

    if($rank >=20000){  //si el parámetro es mayor o igual a 20000, se ejecuta el código de abajo
        echo "¡Eres un usuario premium! \n"; //se imprime el mensaje

} else { //si el parámetro es menor a 20000, se ejecuta el código de abajo
    echo "¡Eres un usuario normal! \n"; //se imprime el mensaje
    }
}

echo "\n";

$read = (int) readline("¿Cuántos puntos tienes? "); //se pide al usuario que ingrese un valor y se guarda en la variable $read
es_premium($read); //se llama a la función y se le pasa como parámetro el valor que el usuario ingresó


?>


<?php

// Ejemplo de función con parámetros con do while


function es_premium2($rank){  

    if($rank >=20000){  
        echo "¡Eres un usuario premium! \n"; 

} else { 
      echo "¡Eres un usuario normal! \n"; 
    }
}

echo "\n";

do{

$read = (int) readline("¿Cuántos puntos tienes? ");$read = (int) readline("¿Cuántos puntos tienes? "); //se pide al usuario que ingrese un valor y se guarda en la variable $read
es_premium2($read); //se llama a la función y se le pasa como parámetro el valor que el usuario ingresó


} while($read != 0); //si el usuario ingresa 0, se termina el programa


?>