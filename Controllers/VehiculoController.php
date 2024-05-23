<?php
require_once "./Models/VehiculoModel.php";
require_once "./Models/ClienteModel.php";
require_once "./Models/MarcaModel.php";
require_once "./Models/ModeloModel.php";

class VehiculoController {

    private $vehiculoModel;
    private $clienteModel;
    private $marcaModel;
    private $modeloModel;

    function __construct() {
        $this->vehiculoModel = new VehiculoModel();
        $this->clienteModel = new ClienteModel();
        $this->marcaModel = new MarcaModel();
        $this->modeloModel = new ModeloModel();
    } 
  
    public function listar() 
    {
        $vehiculos = $this->vehiculoModel->getAllVehiculos();
        require_once "./Views/Vehiculos/index.php";
    }

    function agregar() {
        $clientes = $this->clienteModel->getAllClientes();
        $marcas = $this->marcaModel->getAllMarcas();
        $modelos = $this->modeloModel->getAllModelos();
        require_once "./Views/Vehiculos/agregar.php";
    }

    function guardar() {
        $chasis = $_POST['chasis'];
        $placa = $_POST['placa'];
        $date = $_POST['date'];
        $color = $_POST['color'];
        $clienteId = $_POST['cliente'];
        $marcaId = $_POST['marca'];
        $modeloId = $_POST['modelo'];
        $this->vehiculoModel->addVehiculo($chasis, $placa, $date, $color, $clienteId, $marcaId, $modeloId);
        $this->listar();
    }

    function modificar($id) {
        $clientes = $this->clienteModel->getAllClientes();
        $marcas = $this->marcaModel->getAllMarcas();
        $modelos = $this->modeloModel->getAllModelos();
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
        $clienteId = $_POST['cliente'];
        $marcaId = $_POST['marca'];
        $modeloId = $_POST['modelo'];
        $this->vehiculoModel->updateVehiculo($id ,$chasis, $placa, $date, $color, $clienteId, $marcaId, $modeloId);
        $this->listar();
    }

    function eliminar($id) {
        $this->vehiculoModel->deleteVehiculo($id);
        $this->listar();
    }
}