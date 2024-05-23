<?php
require_once "./Models/DB.php";

class TipoModel {
    private $db;

    function __construct() {
        // Conectarse a la base de datos
        $this->db = new DB();
    }

    // Obtener todos los Tipos
    function getAllTipos() {
        $sql = "SELECT * FROM tipovehiculo";
        return $this->db->select($sql);
    }

    // Obtener un Tipo por su ID
    function getTipoById($TipoId) {
        $sql = "SELECT * FROM tipovehiculo WHERE TipoVehiculoId = ?";
        $data = [$TipoId];
        return $this->db->select($sql, $data);
    }

    // Agregar un nuevo Tipo
    function addTipo($nombre, $inicialPlaca) {
        $sql = "INSERT INTO tipovehiculo (nombre, inicialPlaca) VALUES (? , ?)";
        $data = [$nombre, $inicialPlaca];
        $this->db->execute($sql, $data);
    }

    // Actualizar los datos de un Tipo
    function updateTipo($TipoId, $nombre, $inicialPlaca) {
        $sql = "UPDATE tipovehiculo SET nombre = ?, inicialPlaca = ? WHERE TipoVehiculoId = ?";
        $data = [$nombre, $inicialPlaca, $TipoId];
        $this->db->execute($sql, $data);
    }

    // Eliminar un Tipo por su ID
    function deleteTipo($TipoId) {
        $sql = "DELETE FROM tipovehiculo WHERE TipoVehiculoId = ?";
        $data = [$TipoId];
        $this->db->execute($sql, $data);
    }
}
