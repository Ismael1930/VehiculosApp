<?php include "Views/Templates/header.php"; ?>
<a class="btn btn-outline-primary mb-2" href="<?php echo base_url; ?>index.php?c=Modelo&a=agregar"><i class="fas fa-plus"></i></a>
<div class="card">
    <div class="card-header bg-info text-white">
        Modelos
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover display responsive nowrap" id="Marcas" style="width: 100%;">
            <thead class="bg-info text-white">
                <tr>
                    <th>Id</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($modelos as $modelo) { ?>
                    <tr>
                        <td><?php echo $modelo['ModeloId']; ?></td>
                        <td><?php echo $modelo['nombre']; ?></td>
                        <td><?php echo $modelo['nombreMarca']; ?></td>
                        <td>
                            <?php echo "
                                <a href='index.php?c=modelo&a=modificar&id=" . $modelo['ModeloId'] . "' class='btn btn-primary mx-2'>editar</a>
                                <a href='index.php?c=Marca&a=eliminar&id=" . $modelo['ModeloId'] . "' class='btn btn-danger'>eliminar</a>
                            "?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>