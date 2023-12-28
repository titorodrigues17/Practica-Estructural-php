<?php
    /*
    Un ciclo foreach es un tipo especial de bucle 
    que permite recorrer estructuras que contienen 
    varios elementos (como matrices, recursos u objetos)
     sin necesidad de preocuparse por el número de elementos.
    */

    $tienda_de_cafe = array(
        "Americano" => 20,
        "Latte" => 30,
        "Capuccino" => 40,
        "Mocca" => 25.35,
    );

    foreach ($tienda_de_cafe as $price) { //  hacerlo de esta forma solo me trae el valor sin importar su key 
        echo "El cafe en cuestion cuesta $$price USD"."\n";
    }

    echo "\n"

    

    //Realizar un foreach que me traiga tambien sus subindices

    foreach ($tienda_de_cafe as $key => $price) {
        echo "El cafe $key en cuestion cuesta $$price USD"."\n";
    }
    echo "\n"

?>