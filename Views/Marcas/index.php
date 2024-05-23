<?php include "Views/Templates/header.php"; ?>
<a class="btn btn-outline-primary mb-2" href="<?php echo base_url; ?>index.php?c=Marca&a=agregar"><i class="fas fa-plus"></i></a>
<div class="card">
    <div class="card-header bg-info text-white">
        Marcas
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover display responsive nowrap" id="Marcas" style="width: 100%;">
            <thead class="bg-info text-white">
                <tr>
                    <th>Id</th>
                    <th>Marcas</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($marcas as $marca) { ?>
                    <tr>
                        <td><?php echo $marca['MarcaId']; ?></td>
                        <td><?php echo $marca['Nombre']; ?></td>
                        <td>
                            <?php echo "
                                    <a href='index.php?c=Marca&a=modificar&id=" . $marca['MarcaId'] . "' class='btn btn-primary mx-2'>editar</a>
                                    <a href='index.php?c=Marca&a=eliminar&id=" . $marca['MarcaId'] . "' class='btn btn-danger'>eliminar</a>
                                " ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>