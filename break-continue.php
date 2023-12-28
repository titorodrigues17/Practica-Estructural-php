<?php
    /*
    break Permite salir prematuramente de un bucle. 
    Break finaliza la ejecución de la estructura de 
    control en curso. Break también finaliza la 
    evaluación de la estructura de control actual 
    y no sigue haciendo iteraciones. 

    continue Permite saltar a la siguiente iteración 
    de un bucle. Continue finaliza la iteración actual
    de la estructura de control y se inicia una nueva 
    iteración. Continue le dice a PHP que la iteración
    actual ha terminado y debe comenzar en la evaluación
    de la condición para la siguiente iteración. 
    */

    $tienda_de_cafe = array(
        "Americano" => 20,
        "Latte" => 30,
        "Capuccino" => 40,
        "Mocca" => 25.35,
    );

    foreach ($tienda_de_cafe as $cafe => $precio) {
        echo "Actualmente encontré al café $cafe y su precio es $$precio USD". "\n";

       if ($cafe == "Latte") {
             echo "¡Encontraste Latte !";
             break;
        }
    } echo "\n";


    //Continue

    $tienda_de_cafe = array(
        "Americano" => 20,
        "Latte" => 30,
        "Recalentado" => 10,
        "Capuccino" => 40,
        "Mocca" => 25.35,
    );

    foreach ($tienda_de_cafe as $cafe => $precio) {

        if ($cafe == "Recalentado") {
            continue; // nos saltamos el cafe recalentado
        }
        echo "El café $cafe es muy rico y su precio es $$precio USD". "\n";

       
    } echo "\n";
?>