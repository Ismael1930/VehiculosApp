<?php include "Views/Templates/header.php"; ?>

<div  style="display: block;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="title">Insertar Marca</h5>
            </div>
            <form id="tipos" name="tipos" method="POST" autocomplete="off" action="index.php?c=Tipo&a=actualizar">
                <div class="modal-body">
                    <div class="form-floating mb-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="El nombre es requerido">
                        <input id="nombre" class="form-control" type="text" name="id" value="<?php echo $tipo['TipoVehiculoId']?>"  placeholder="12" required readonly>
                        <label for="nombre"><i class="fas fa-list"></i> Id <span class="text-danger fw-bold">*</span> </label>
                    </div>
                    <div class="form-floating mb-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="El nombre es requerido">
                        <input id="nombre" class="form-control" type="text" name="nombre" value="<?php echo $tipo['Nombre']?>" placeholder="Nombre del cliente" required>
                        <label for="nombre"><i class="fas fa-list"></i> Nombre <span class="text-danger fw-bold">*</span> </label>
                    </div>
                    <div class="form-floating mb-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="El nombre es requerido">
                        <input id="nombre" class="form-control" type="text" name="inicialPlaca" value="<?php echo $tipo['InicialPlaca']?>" placeholder="A" required>
                        <label for="nombre"><i class="fas fa-list"></i> Inicial de Placa <span class="text-danger fw-bold">*</span> </label>
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