<?php

namespace App; // Namespaces App == src/
/*
    connectdb, no necesita parametros solo debe llamrse su metodo connects() para inicializar,
    se puede inicializar con el constructor para mayor rendimiento sin embargo es mejor que se inicie,
    solo cuando se le sea invocada y no cuando la clase sea invocada esto para mayor gestion de los hilos.
*/
class connectDb
{
    
    public function connects()
    {
        $conn = mysqli_connect('localhost','root','','crud'); // Me retorna un objecto que debe ser evaluado
        return $conn; 
        // Validamos que sea un objecto el retorno en la clase test de la misma
    }
}

