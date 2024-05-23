<?php
require_once "./Models/VehiculoModel.php";

class VehiculoController {

    private $vehiculoModel;

    function __construct() {
        $this->vehiculoModel = new VehiculoModel();
    } 
  
    public function listar() 
    {
        $vehiculos = $this->vehiculoModel->getAllVehiculos();
        require_once "./Views/Vehiculos/index.php";
    }

    function agregar() {
        require_once "./Views/Vehiculos/agregar.php";
    }

    function guardar() {
        $chasis = $_POST['chasis'];
        $placa = $_POST['placa'];
        $date = $_POST['date'];
        $color = $_POST['color'];
        // $clienteId = $_POST['clienteId'];
        // $marcaId = $_POST['marcaId'];
        $this->vehiculoModel->addVehiculo($chasis, $placa, $date, $color, $clienteId = 1, $marcaId = 1);
        $this->listar();
    }

    function modificar($id) {
        $vehiculoArr = $this->vehiculoModel->getVehiculoById($id);
        $vehiculo = $vehiculoArr[0];
        require_once "./Views/vehiculos/modificar.php";
    }

    function actualizar() {
        $id = $_POST['id'];
        $chasis = $_POST['chasis'];
        $placa = $_POST['placa'];
        $date = $_POST['date'];
        $color = $_POST['color'];
        // $clienteId = $_POST['clienteId'];
        // $marcaId = $_POST['marcaId'];
        $this->vehiculoModel->updateVehiculo($id ,$chasis, $placa, $date, $color, $clienteId = 1, $marcaId = 1);
        $this->listar();
    }

    function eliminar($id) {
        $this->vehiculoModel->deleteVehiculo($id);
        $this->listar();
    }
}