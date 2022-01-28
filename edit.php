<?php
include('db.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = "SELECT * FROM task WHERE id = $id";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)== TRUE)
    {
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $description = $row['description'];
    }
}
if(isset($_POST['update']))
{
    $title = $_POST['title'];
    $description = $_POST['description'];
    $update = "UPDATE task SET title = '$title', description = '$description' WHERE id = $id";
    mysqli_query($conn, $update);
    $_SESSION['message'] = "Se ha actualizado tu tarea";
    $_SESSION['message_type'] = "warning";
    header("Location: index.php");
    mysqli_close();
}
?>

<?php include('includes/header.php');?>

<div class="mt-4 d-flex justify-content-center">
    <div class="col-4">
        <div class="m-auto card card-body m-auto">
            <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST"> 
            <div class=" form-group">
                <input type="text" name="title" class="mt-3 form-control" placeholder="Escribe tu tarea " value="<?php echo $title; ?>" autofocus>
            </div>
            <div class="form-group">
                <textarea name="description" id="" rows="2" class="mt-3 form-control" placeholder="Descripcion"><?php echo $description; ?></textarea>
            </div>
            <button class="mt-3 btn btn-success" name="update">
                Actualizar
            </button>
        </form>
    </div>
</div>
</div>

<?php include('includes/footer.php');?>
