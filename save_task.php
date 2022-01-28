<?php
include( 'db.php');
if(isset($_POST['save_task']))
{
    $title = $_POST['title'];
    $description = $_POST['description'];
    echo $title , $description;

    // $query = "INSERT INTO task(title,description) VALUES('$title,$description')";
    $result = mysqli_query($conn,"INSERT INTO task(title,description) VALUES('$title','$description')");
    if($result === TRUE)
    {
        header("Location: index.php");
    }else{
        echo "Fallo su Tarea, lo sntimos";
        $_SESSION['message_type'] = "danger";

        $_SESSION['message'] = "No se ha podido guardar su tarea";
    }
    $_SESSION['message_type'] = "success";

    $_SESSION['message'] = "Tarea guardada";
}

