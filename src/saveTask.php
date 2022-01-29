<?php

namespace App; // Namespaces App == src/
require_once('connectDb.php'); // Invocamos a la conexion hacia la base de datos.

class saveTask
{
    
    public function QuerySave() // esta funcion no toca ni esta adherida a los test para ello usa la funcion de abajo
    // testSave() -> con ella podras testear si es true o no tu consulta
    {
        $instanceOfConnetDb = new connectDb;
        $conn = $instanceOfConnetDb->connects();

        if(isset($_POST['save_task']))
        {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $result = mysqli_query($conn,"INSERT INTO task(title,description) VALUES('$title','$description')");

            if($result === TRUE)
            {
                header("Location: ../index.php");
            }else{
                echo "Fallo su Tarea, lo sentimos";
                $_SESSION['message_type'] = "danger";
                $_SESSION['message'] = "No se ha podido guardar su tarea";
            }
            $_SESSION['message_type'] = "success";
            $_SESSION['message'] = "Tarea guardada";
        }
    }

    public function testSave($pruebaSave, $descriptionSave) // Coloco otra funcion aparte para validar si los query funcionan,
    // Lo ideal seria una sola function dentro de la clase pero no puedo juntar codigo de prueba con codigo real
    {
        $instanceOfConnetDb = new connectDb;
        $conn = $instanceOfConnetDb->connects();
    
        $result = mysqli_query($conn,"INSERT INTO task(title,description) VALUES('$pruebaSave','$descriptionSave')");
        if($result === TRUE){return TRUE;} else{return FALSE;}
    }

}

$save = new SaveTask;
echo $save->QuerySave();