
<?php require_once('../includes/header.php'); ?>
<div class="mt-4 d-flex justify-content-center">
    <div class="col-4">
        <div class="m-auto card card-body m-auto">
            <form action="../src/editTask.php?id=<?php echo $_GET['id'];?>" method="POST"> 
            <div class=" form-group">
                <input type="text" name="title" class="mt-3 form-control" placeholder="Escribe tu tarea " value="<?php echo "Editar tu titulo"; ?>" autofocus>
            </div>
            <div class="form-group">
                <textarea name="description" id="" rows="2" class="mt-3 form-control" placeholder="Descripcion"><?php echo "Editar" ?></textarea>
            </div>
            <button class="mt-3 btn btn-success" name="update">
                Actualizar
            </button>
        </form>
    </div>
</div>
</div>
<?php require_once('../includes/footer.php')?>