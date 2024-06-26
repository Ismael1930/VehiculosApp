<?php include "Views/Templates/header.php"; ?>
<div class="row">
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card text-success mb-4">
            <div class="card-body">
                <i class="fas fa-users fa-2x"></i> Clientes
                <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-success">
                    <i class="fas fa-users"></i>
                    
                    <span class="visually-hidden"></span>
                </span>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between bg-success">
                <a class="small text-white stretched-link" href="<?php echo base_url; ?>index.php?c=Cliente&a=listar">Ver detalle</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card text-danger mb-4">
            <div class="card-body">
                <i class="fas fa-taxi fa-2x"></i> Vehiculos
                <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-danger">
                    <i class="fab fa-product-hunt"></i>
                    
                    <span class="visually-hidden"></span>
                </span>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between bg-danger">
                <a class="small text-white stretched-link" href="<?php echo base_url; ?>index.php?c=Vehiculo&a=listar">Ver detalle</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card text-info mb-4">
            <div class="card-body"><i class="fas fa-tags fa-2x"></i> Marcas
                <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-info">
                    <i class="fas fa-tag"></i>
                    
                    <span class="visually-hidden"></span>
                </span>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between bg-info">
                <a class="small text-white stretched-link" href="<?php echo base_url; ?>index.php?c=Marca&a=listar">Ver detalle</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card text-primary mb-4">
            <div class="card-body"><i class="fas fa-tags fa-2x"></i> Modelos
                <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-primary">
                    <i class="fas fa-tag"></i>
                    
                    <span class="visually-hidden"></span>
                </span>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between bg-primary">
                <a class="small text-white stretched-link" href="<?php echo base_url; ?>index.php?c=Modelo&a=listar">Ver detalle</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card text-warning mb-4">
            <div class="card-body"><i class="fas fa-tags fa-2x"></i> Tipos
                <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-warning">
                    <i class="fas fa-tag"></i>
                    
                    <span class="visually-hidden"></span>
                </span>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between bg-warning">
                <a class="small text-white stretched-link" href="<?php echo base_url; ?>index.php?c=Tipo&a=listar">Ver detalle</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo base_url; ?>Assets/img/1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url; ?>Assets/img/2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url; ?>Assets/img/3.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<?php include "Views/Templates/footer.php"; ?>