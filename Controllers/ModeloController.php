<?php
require_once "./Models/ModeloModel.php";

class ModeloController {

    private $ModeloModel;

    function __construct() {
        $this->ModeloModel = new ModeloModel();
    }
  
    public function listar() {
        $modelos = $this->ModeloModel->getAllModelos();
        require_once "./Views/Modelos/index.php";
    }

    function agregar() {
        require_once "./Views/Modelos/agregar.php";
    }

    function guardar() {
        $nombre = $_POST['nombre'];
        $this->ModeloModel->addModelo($nombre);
        $this->listar();
    }

    function modificar($id) {
        $modeloArr = $this->ModeloModel->getModeloById($id);
        $modelo = $modeloArr[0];
        require_once "./Views/Modelos/modificar.php";
    }

    function actualizar() {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $this->ModeloModel->updateModelo($id, $nombre);
        $this->listar();
    }

    function eliminar($id) {
        $this->ModeloModel->deleteModelo($id);
        $this->listar();
    }
}