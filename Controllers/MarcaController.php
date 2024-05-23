<?php
require_once "./Models/MarcaModel.php";

class MarcaController {

    private $marcaModel;

    function __construct() {
        $this->marcaModel = new MarcaModel();
    }
  
    public function listar() {
        $marcas = $this->marcaModel->getAllMarcas();
        require_once "./Views/Marcas/index.php";
    }

    function agregar() {
        require_once "./Views/Marcas/agregar.php";
    }

    function guardar() {
        $nombre = $_POST['nombre'];
        $this->marcaModel->addMarca($nombre);
        $this->listar();
    }

    function modificar($id) {
        $marcaArr = $this->marcaModel->getMarcaById($id);
        $marca = $marcaArr[0];
        require_once "./Views/Marcas/modificar.php";
    }

    function actualizar() {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];

        $this->marcaModel->updateMarca($id, $nombre);
        $this->listar();
    }

    function eliminar($id) {
        $this->marcaModel->deleteMarca($id);
        $this->listar();
    }
}