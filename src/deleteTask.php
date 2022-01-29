<?php
namespace App; // Namespaces App == Src/.
require_once('connectDb.php'); // Invocamos a la conexion hacia la base de datos.

class deleteTask
{
    public function QueryDelete()
    {

        if(isset($_GET['id']))
        {
            $instanceOfConnetDb = new connectDb;
            $conn = $instanceOfConnetDb->connects();

            $id = $_GET['id'];
            $query = "DELETE FROM task WHERE id = $id";
            $result = mysqli_query($conn,$query); //Objecto mysqli 

            if(!$result)
            {
                echo("<h2>Error con su operacion</h2>");
            }

            $_SESSION['message'] = "Tu tarea se ha removido existosamente";
            $_SESSION['message_type'] = "danger";
            header("Location: ../index.php");
            resetCount();
            mysqli_close();
        }
    }

    public function testDelete(int $range1 , int $range2) // variables para hacer delete de id en el rango deseado.
    {
        $instanceOfConnetDb = new connectDb;
        $conn = $instanceOfConnetDb->connects();
        $query = "DELETE FROM task WHERE id >$range1 AND id < $range2 "; // range 1 and range 2 son variables para hacer consulta de borrado en dicho rango de id.
        $result = mysqli_query($conn,$query);
        if($result == TRUE){return TRUE;}else {return FALSE;}
    }
}

$deleteTask = new deleteTask;
$deleteTask->QueryDelete();