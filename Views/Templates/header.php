<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Panel Adminstrativo</title>
    <link href="<?php echo base_url; ?>Assets/css/styles.css" rel="stylesheet" />
    <link href="<?php echo base_url; ?>Assets/DataTables/datatables.min.css" rel="stylesheet" />
    <link href="<?php echo base_url; ?>Assets/css/jquery-ui.min.css" rel="stylesheet" />
    <link href="<?php echo base_url; ?>Assets/css/estilos.css" rel="stylesheet" />
    <script src="<?php echo base_url; ?>Assets/js/all.min.js"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="<?php echo base_url; ?>index.php">VehiculosApp</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="<?php echo base_url; ?>index.php?c=Cliente&a=listar">
                            <div class="sb-nav-link-icon"><i class="fas fa-users fa-2x"></i></div>
                            Clientes
                        </a>
                        <?php ?>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseVehiculos" aria-expanded="false" aria-controls="collapseVehiculos">
                                <div class="sb-nav-link-icon"><i class="fas fa-truck-moving fa-2x"></i></div>
                                Vehículos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseVehiculos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url; ?>index.php?c=Marca&a=listar">Marcas</a>
                                    <a class="nav-link" href="<?php echo base_url; ?>index.php?c=Tipo&a=listar">Tipos</a>
                                    <a class="nav-link" href="<?php echo base_url; ?>index.php?c=Vehiculo&a=listar">Vehiculos</a>
                                </nav>
                            </div>
                        <?php ?>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small text-capitalize"></div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 mt-4">