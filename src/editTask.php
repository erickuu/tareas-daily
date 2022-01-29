<?php
namespace App; // Llamamos al namespaces App == src/
require_once('connectDb.php'); // Invocamos a la conexion hacia la base de datos.

class editTask
{ 
    public function DOM () 
    {
       return include('../assets/views/editView.php');   // Esto nos retorna una pagina entera html donde el usuario editara su entrada          
    }

    public function QueryEdit()
    {
        if(isset($_GET['id']))
        {
            $instanceOfConnetDb = new connectDb;
            $conn = $instanceOfConnetDb->connects();

            $id = $_GET['id'];
            $query = "SELECT * FROM task WHERE id = $id";
            $result = mysqli_query($conn,$query);
        
            if(mysqli_num_rows($result) == TRUE)
            {
                $row = mysqli_fetch_array($result);
                $title = $row['title'];
                $description = $row['description'];
            }
        }
        if(isset($_POST['update']))
        {
            $title_post = $_POST['title'];
            $description_post = $_POST['description'];
            $update = "UPDATE task SET title = '$title_post', description = '$description_post' WHERE id = $id";
            mysqli_query($conn, $update);
            $_SESSION['message'] = "Se ha actualizado tu tarea";
            $_SESSION['message_type'] = "warning";
            header("Location: ../index.php");

        }
        $this->DOM();

    }

    public function testEdit(str $title , str $description) // Prueba para actualizar un elemento de la base de  datos
    // por defecto actualiza el id 1 de toda la tabla 
    {
        $instanceOfConnetDb = new connectDb;
        $conn = $instanceOfConnetDb->connects();
        $update = "UPDATE `task` SET `title`='$title',`description`='$description' WHERE id = 1;";
        // Consulta para actualizar datos en la variable $update 
        $query = mysqli_query($conn, $update); // Esto retorna TRUE O FALSE debido a que es una consulta y a la vez un objecto MYSQLI
        if($query === FALSE){return FALSE;}else{return TRUE;}
    }
}
$queryEdit = new editTask;
$queryEdit->QueryEdit();