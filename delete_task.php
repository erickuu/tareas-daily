<?php

include("db.php");

function resetCount()
{
    require("db.php");

    $query = "ALTER TABLE task AUTO_INCREMENT=1";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        return TRUE;
    }else
    {
        return FALSE ;
    }
    mysqli_close();
}

if(isset($_GET['id']))
{

    $id = $_GET['id'];
    $query = "DELETE FROM task WHERE id = $id";

    $result = mysqli_query($conn,$query);
    resetCount();
    if(!$result)
    {
        echo("<h2>Error con su operacion</h2>");
    }

    $_SESSION['message'] = "Tu tarea se ha removido existosamente";
    $_SESSION['message_type'] = "danger";
    header("Location: index.php");
    mysqli_close();
}