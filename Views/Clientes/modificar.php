<?php include "Views/Templates/header.php"; ?>

<div  style="display: block;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="title">Modificar Cliente</h5>
            </div>
            <form id="UpdateCliente" name="UpdateCliente" method="POST" autocomplete="off" action="index.php?c=Cliente&a=actualizar">
                <div class="modal-body">
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </symbol>
                        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                        </symbol>
                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </symbol>
                    </svg>
                    <div class="alert alert-info d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                        </svg>
                        <div>
                            Todo los campos con <span class="text-danger fw-bold">*</span> son obligatorio.
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input id="cedula" class="form-control" type="text" name="id" value="<?php echo $cliente['ClienteId']?>" readonly placeholder="Documento de Identidad">
                        <label for="cedula"><i class="fas fa-id-card"></i> Id <span class="text-danger fw-bold">*</span> </label>
                    </div>
                    <div class="form-floating mb-3">
                        <input id="cedula" class="form-control" type="text" value="<?php echo $cliente['Cedula']?>" name="cedula" placeholder="Documento de Identidad">
                        <label for="cedula"><i class="fas fa-id-card"></i> Cedula <span class="text-danger fw-bold">*</span> </label>
                    </div>
                    <div class="form-floating mb-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="El nombre es requerido">
                        <input id="nombre" class="form-control" type="text" value="<?php echo $cliente['Nombre']?>" name="nombre" placeholder="Nombre del cliente" required>
                        <label for="nombre"><i class="fas fa-list"></i> Nombre <span class="text-danger fw-bold">*</span> </label>
                    </div>
                    <div class="form-floating mb-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="El Apellido es requerido">
                        <input id="apellido" class="form-control" type="text" value="<?php echo $cliente['Apellido']?>" name="apellido" placeholder="Jiemez" required>
                        <label for="apellido"><i class="fas fa-phone"></i> Apellido <span class="text-danger fw-bold">*</span> </label>
                    </div>
                    <div class="form-floating mb-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="La fecha de Nacimiento es requerida">
                        <input id="fechaNacimiento" type="date" class="form-control" value="<?php echo $cliente['FechaNacimiento'] ?>" name="fechaNacimiento"  placeholder="1994-05-15" required></input>
                        <label for="fechaNacimiento"><i class="fas fa-home"></i> fechaNacimiento <span class="text-danger fw-bold">*</span> </label>
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