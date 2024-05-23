<?php include "Views/Templates/header.php"; ?>

<div  style="display: block;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="title">Insertar Modelo</h5>
            </div>
            <form id="UnpdateCliente" name="UnpdateCliente" method="POST" autocomplete="off" action="index.php?c=Modelo&a=actualizar">
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input id="cedula" class="form-control" type="text" name="id" value="<?php echo $modelo['ModeloId']?>" readonly placeholder="Documento de Identidad">
                        <label for="cedula"><i class="fas fa-id-card"></i> Id <span class="text-danger fw-bold">*</span> </label>
                    </div>
                    <div class="form-floating mb-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="El campo es requerido">
                        <input id="nombre" class="form-control" type="text" name="nombre" value="<?php echo $modelo['nombre']?>" placeholder="Nombre del Modelo" required>
                        <label for="nombre"><i class="fas fa-list"></i> Nombre <span class="text-danger fw-bold">*</span> </label>
                    </div>
                    <div class="form-floating mb-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="El campo es requerido">
                    <select id="marca" name="marca" class="form-select">
                        <?php
                        foreach ($marcas as $marca) {
                            echo '<option value="' . $marca['MarcaId'] . '">' . $marca['Nombre'] . '</option>';
                        }
                        ?>
                    </select>
                        <label for="nombre"><i class="fas fa-list"></i> Marca <span class="text-danger fw-bold">*</span> </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-primary" type="submit" id="btnAccion" onclick="">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "Views/Templates/footer.php"; ?>