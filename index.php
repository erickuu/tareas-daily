<?php include('vendor/autoload.php');?>
<?php 
    use App\connectDb;
    use App\deleteTask;
    use App\saveTask;
    use App\editTask;
?>
<?php include("includes/header.php")?>

    <div class="container p-4">

        <div class="row">
            <div class="col-md-4">
                <?php if(isset($_SESSION['message'])){?>
                    <div class="alert alert-<?= $_SESSION['message_type'];?> s alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message']?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    <?php session_unset();}?>
                <div class="card card-body">
                    <form action="src/saveTask.php" method="POST"> 
                        <div class="form-group">
                            <input type="text" name="title" class="mt-3 form-control" placeholder="Escribe tu tarea" autofocus>
                        </div>
                        <div class="form-group ">
                            <textarea name="description" id="" rows="5" class="mt-3 form-control" placeholder="Descripcion"></textarea>
                        </div>
                        <input type="submit" class="mt-3 btn btn-success btn-block" name="save_task" value="Guardar">  
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th>Fecha De creacion</th>
                            <th>Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                            <?php
                            $instanceOfConnetDb = new connectDb;
                            $conn = $instanceOfConnetDb->connects();
                            $query = "SELECT * FROM task";
                            $resultSql = mysqli_query($conn, $query);
                            
                            while($getRow = mysqli_fetch_array($resultSql))
                            {?>
                            <tr>
                                <td><?php echo $getRow['title']?></td>
                                <td><?php echo $getRow['description']?></td>
                                <td><?php echo $getRow['create_at']?></td>
                                <td>
                                    <a class="icons btn btn-danger" style="color:brownie;" href="src/deleteTask.php?id=<?php print($getRow['id']); ?>">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                    <span></span>   
                                    <a class="icons btn btn-warning" style="color:white;" href="src/editTask.php?id=<?php print($getRow['id']); ?>">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                             
                    </tbody>

                </table>
            </div>
        </div>
    </div>

<?php include("includes/footer.php")?>