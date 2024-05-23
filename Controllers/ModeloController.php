<?php
require_once "./Models/ModeloModel.php";
require_once "./Models/MarcaModel.php";

class ModeloController {

    private $ModeloModel;
    private $MarcaModel;

    function __construct() {
        $this->ModeloModel = new ModeloModel();
        $this->MarcaModel = new MarcaModel();
    }
  
    public function listar() {
        $modelos = $this->ModeloModel->getAllModelos();
        require_once "./Views/Modelos/index.php";
    }

    function agregar() {
       $marcas = $this->MarcaModel->getAllMarcas();
        require_once "./Views/Modelos/agregar.php";
    }

    function guardar() {
        $nombre = $_POST['nombre'];
        $marcaId = $_POST['marca'];
        $this->ModeloModel->addModelo($nombre, $marcaId);
        $this->listar();
    }

    function modificar($id) {
        $marcas = $this->MarcaModel->getAllMarcas();
        $modeloArr = $this->ModeloModel->getModeloById($id);
        $modelo = $modeloArr[0];
        require_once "./Views/Modelos/modificar.php";
    }

    function actualizar() {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $marcaId = $_POST['marca'];
        $this->ModeloModel->updateModelo($id, $nombre, $marcaId);
        $this->listar();
    }

    function eliminar($id) {
        $this->ModeloModel->deleteModelo($id);
        $this->listar();
    }
}