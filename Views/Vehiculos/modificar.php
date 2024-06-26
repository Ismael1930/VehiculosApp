<?php include "Views/Templates/header.php"; ?>

<div  style="display: block;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="title">Insertar Vehiculo</h5>
            </div>
            <form id="AddCliente" name="AddCliente" method="POST" autocomplete="off" action="index.php?c=Vehiculo&a=actualizar">
                <div class="modal-body">
                <div class="form-floating mb-3">
                        <input id="cedula" class="form-control" type="text" name="id" value="<?php echo $vehiculo['VehiculoId']?>" readonly placeholder="Documento de Identidad">
                        <label for="cedula"><i class="fas fa-id-card"></i> Id <span class="text-danger fw-bold">*</span> </label>
                    </div>
                    <div class="form-floating mb-3">
                        <input id="cedula" class="form-control" type="text" value="<?php echo $vehiculo['Chasis']?>" name="chasis" placeholder="Documento de Identidad">
                        <label for="cedula"><i class="fas fa-id-card"></i> Chasis <span class="text-danger fw-bold">*</span> </label>
                    </div>
                    <div class="form-floating mb-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="El campo es requerido">
                        <input id="nombre" class="form-control" type="text" value="<?php echo $vehiculo['Placa']?>" name="placa" placeholder="Nombre del cliente" required>
                        <label for="nombre"><i class="fas fa-list"></i> Placa <span class="text-danger fw-bold">*</span> </label>
                    </div>
                    <div class="form-floating mb-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="El campo es requerido">
                    <select id="marca" name="marca" class="form-select">
                        <?php
                        foreach ($marcas as $marca) {
                            echo '<option value="' . $marca['MarcaId'] . '">' . $marca['Nombre'] . '</option>';
                        }
                        ?>
                    </select>
                        <label for="apellido"><i class="fas fa-phone"></i> Marca <span class="text-danger fw-bold">*</span> </label>
                    </div>
                    <div class="form-floating mb-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="El campo es requerido">
                    <select id="modelo" name="modelo" class="form-select">
                        <?php
                        foreach ($modelos as $modelo) {
                            echo '<option value="' . $modelo['ModeloId'] . '">' . $modelo['nombre'] . '</option>';
                        }
                        ?>
                    </select>
                        <label for="direccion"><i class="fas fa-home"></i> Modelo <span class="text-danger fw-bold">*</span> </label>
                    </div>
                    <div class="form-floating mb-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="El campo es requerido">
                        <input id="date" type="text" class="form-control" value="<?php echo $vehiculo['Date']?>" name="date" rows="3" placeholder="1994-05-15" required></input>
                        <label for="date"><i class="fas fa-home"></i> Año <span class="text-danger fw-bold">*</span> </label>
                    </div>
                    <div class="form-floating mb-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="El campo es requerido">
                        <input id="color" type="text" class="form-control" value="<?php echo $vehiculo['Color']?>" name="color" rows="3" placeholder="1994-05-15" required></input>
                        <label for="color"><i class="fas fa-home"></i> Color <span class="text-danger fw-bold">*</span> </label>
                    </div>
                    <div class="form-floating mb-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="El campo es requerido">
                    <select id="cliente" name="cliente" class="form-select">
                        <?php
                        foreach ($clientes as $cliente) {
                            echo '<option value="' . $cliente['ClienteId'] . '">' . $cliente['Nombre'] . '</option>';
                        }
                        ?>
                    </select>
                        <label for="cliente"><i class="fas fa-home"></i> Cliente <span class="text-danger fw-bold">*</span> </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-primary" type="submit" id="btnAccion" onclick="">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "Views/Templates/footer.php"; ?>