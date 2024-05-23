<?php include "Views/Templates/header.php"; ?>
<a class="btn btn-outline-primary mb-2" href="<?php echo base_url; ?>index.php?c=Tipo&a=agregar"><i class="fas fa-plus"></i></a>
<div class="card">
    <div class="card-header bg-info text-white">
        Tipos de Vehiculos
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover display responsive nowrap" id="Marcas" style="width: 100%;">
            <thead class="bg-info text-white">
                <tr>
                    <th>Id</th>
                    <th>Tipos de Vehiculos</th>
                    <th>Inicial de Placa</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tipos as $tipo) { ?>
                    <tr>
                        <td><?php echo $tipo['TipoVehiculoId']; ?></td>
                        <td><?php echo $tipo['Nombre']; ?></td>
                        <td><?php echo $tipo['InicialPlaca']; ?></td>
                        <td>
                            <?php echo "
                                    <a href='index.php?c=Tipo&a=modificar&id=" . $tipo['TipoVehiculoId'] . "' class='btn btn-primary mx-2'>editar</a>
                                    <a href='index.php?c=Tipo&a=eliminar&id=" . $tipo['TipoVehiculoId'] . "' class='btn btn-danger'>eliminar</a>
                                " ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>