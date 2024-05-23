<?php include "Views/Templates/header.php"; ?>
<a class="btn btn-outline-primary mb-2" href="<?php echo base_url; ?>index.php?c=Vehiculo&a=agregar"><i class="fas fa-plus"></i></a>

<div class="card">
    <div class="card-header bg-info text-white">
        Vehiculos
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover display responsive nowrap" id="Vehiculos" style="width: 100%;">
                <thead class="bg-info text-white">
                    <tr>
                        <th>Id</th>
                        <th>Chasis</th>
                        <th>Placa</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Año</th>
                        <th>Color</th>
                        <th>Dueño</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($vehiculos as $vehiculo) { ?>
                        <tr>
                            <td><?php echo $vehiculo['VehiculoId']; ?></td>
                            <td><?php echo $vehiculo['Chasis']; ?></td>
                            <td><?php echo $vehiculo['Placa']; ?></td>
                            <td><?php echo $vehiculo['nombreMarca']; ?></td>
                            <td><?php echo $vehiculo['nombreModelo']; ?></td>
                            <td><?php echo $vehiculo['Date']; ?></td>
                            <td><?php echo $vehiculo['Color']; ?></td>
                            <td><?php echo $vehiculo['nombreCliente']; ?></td>
                            <td>
                                <?php echo "
                                    <a href='index.php?c=Vehiculo&a=modificar&id=" . $vehiculo['VehiculoId'] . "' class='btn btn-primary mx-2'>editar</a>
                                    <a href='index.php?c=Vehiculo&a=eliminar&id=" . $vehiculo['VehiculoId'] . "' class='btn btn-danger'>eliminar</a>
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