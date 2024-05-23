<?php
require_once "./Models/ClienteModel.php";

class ClienteController {
    private $clienteModel;

    function __construct() {
        $this->clienteModel = new ClienteModel();
    }

    function listar() {
        $clientes = $this->clienteModel->getAllClientes();
        require_once "./Views/Clientes/index.php";
    }

    function agregar() {
        require_once "./Views/Clientes/agregar.php";
    }

    function guardar() {
        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $this->clienteModel->addCliente($cedula, $nombre, $apellido, $fechaNacimiento);
        $this->listar();
    }

    function modificar($id) {
        $clienteArr = $this->clienteModel->getClienteById($id);
        $cliente = $clienteArr[0];
        require_once "./Views/Clientes/modificar.php";
    }

    function actualizar() {
        $id = $_POST['id'];
        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $this->clienteModel->updateCliente($id ,$cedula, $nombre, $apellido, $fechaNacimiento);
        $this->listar();
    }

    function eliminar($id) {
        $this->clienteModel->deleteCliente($id);
        $this->listar();
    }
}