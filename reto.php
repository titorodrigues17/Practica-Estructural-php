<?php
/*
    Bienvenido a la seccion de retos de la clase de arreglos

    Problema:

    se necesita un arreglo de ciudadanos que contenga la siguiente informacion:
        cada ciudadano debe tener un grupo de familias, cada familia debe tener un grupo de adultos y un grupo de niños
        cada adulto debe tener un nombre, una edad y una profesion. Cada niño debe tener un nombre, una edad y un grado escolar
        cada familia debe tener un apellido y una direccion
*/

// Solucion:

$ciudadanos = array(
    "familia 1" => array(
        "apellido" => "Perez",
        "direccion"=> "Diagonal 23 # 45 - 67",
        "niños" => array(
            "niño 1" => array(
                "nombre" => "Pedro",
                "edad" => 12,
                "grado escolar" => 6
            ),
            "niño 2" => array(
                "nombre" => "Maria",
                "edad" => 8,
                "grado escolar" => 2
            )
        ),
        "adulto 1" => array(
            "nombre" => "Juan",
            "edad" => 34,
            "profesion" => "Ingeniero"
        ),
        "adulto 2" => array(
            "nombre" => "Ana",
            "edad" => 32,
            "profesion" => "Medico"
        )
        ),

        "familia 2" => array(
            "apellido" => "Santos",
            "direccion"=> "Calle 34 # 56 - 78",
            "niño 1" => array(
                "niño 1" => array(
                    "nombre" => "Luis",
                    "edad" => 10,
                    "grado escolar" => 4
                ),
                "niño 2" => array(
                    "nombre" => "Sara",
                    "edad" => 6,
                    "grado escolar" => 1
                )
            ),
            "adulto 1" => array(
                "nombre" => "Carlos",
                "edad" => 45,
                "profesion" => "Abogado"
            ),
            "adulto 2" => array(
                "nombre" => "Sofia",
                "edad" => 43,
                "profesion" => "Contadora"
            )
        )
            );

print_r($ciudadanos["familia 1"]);

echo"\n";
echo"-----------------------------------------------------------------------------------";
echo"\n";

print_r($ciudadanos["familia 2"]);

?>