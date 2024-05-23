<?php
require_once "./Models/TipoModel.php";

class TipoController {

    private $tipoModel;

    function __construct() {
        $this->tipoModel = new tipoModel();
    }
  
    public function listar() {
        $tipos = $this->tipoModel->getAlltipos();
        require_once "./Views/Tipos/index.php";
    }

    function agregar() {
        require_once "./Views/Tipos/agregar.php";
    }

    function guardar() {
        $nombre = $_POST['nombre'];
        $inicialPlaca = $_POST['inicialPlaca'];
        $this->tipoModel->addtipo($nombre, $inicialPlaca);
        $this->listar();
    }

    function modificar($id) {
        $tipoArr = $this->tipoModel->getTipoById($id);
        $tipo = $tipoArr[0];
        require_once "./Views/tipos/modificar.php";
    }

    function actualizar() {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $inicialPlaca = $_POST['inicialPlaca'];
        $this->tipoModel->updatetipo($id, $nombre, $inicialPlaca);
        $this->listar();
    }

    function eliminar($id) {
        $this->tipoModel->deletetipo($id);
        $this->listar();
    }
}