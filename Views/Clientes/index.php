<?php include "Views/Templates/header.php"; ?>

<a class="btn btn-outline-primary mb-2" href="<?php echo base_url; ?>index.php?c=Cliente&a=agregar"><i class="fas fa-plus"></i></a>
<div class="card">
    <div class="card-header bg-info text-white">
        Clientes
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover display responsive nowrap" id="Clientes" style="width: 100%;">
                <thead class="bg-info text-white">
                    <tr>
                        <th>Id</th>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clientes as $cliente) {?>
                        <tr>
                            <td><?php echo $cliente['ClienteId']; ?></td>
                            <td><?php echo $cliente['Cedula']; ?></td>
                            <td><?php echo $cliente['Nombre']; ?></td>
                            <td><?php echo $cliente['Apellido']; ?></td>
                            <td><?php echo $cliente['FechaNacimiento']; ?></td>
                            <td>
                                <?php echo "
                                    <a href='index.php?c=Cliente&a=modificar&id=".$cliente['ClienteId']."' class='btn btn-primary mx-2'>editar</a>
                                    <a href='index.php?c=Cliente&a=eliminar&id=".$cliente['ClienteId']."' class='btn btn-danger'>eliminar</a>
                                " ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include "Views/Templates/footer.php"; ?>