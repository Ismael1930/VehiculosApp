<?php
require_once "./Models/DB.php";

class MarcaModel {
    private $db;

    function __construct() {
        // Conectarse a la base de datos
        $this->db = new DB();
    }

    // Obtener todos los Marcas
    function getAllMarcas() {
        $sql = "SELECT * FROM marca";
        return $this->db->select($sql);
    }

    // Obtener un Marca por su ID
    function getMarcaById($MarcaId) {
        $sql = "SELECT * FROM marca WHERE MarcaId = ?";
        $data = [$MarcaId];
        return $this->db->select($sql, $data);
    }

    // Agregar un nuevo Marca
    function addMarca($nombre) {
        $sql = "INSERT INTO marca (nombre) VALUES (?)";
        $data = [$nombre];
        $this->db->execute($sql, $data);
    }

    // Actualizar los datos de un Marca
    function updateMarca($marcaId, $nombre) {
        $sql = "UPDATE marca SET nombre = ? WHERE MarcaId = ?";
        $data = [$nombre, $marcaId];
        $this->db->execute($sql, $data);
    }

    // Eliminar un Marca por su ID
    function deleteMarca($MarcaId) {
        $sql = "DELETE FROM marca WHERE MarcaId = ?";
        $data = [$MarcaId];
        $this->db->execute($sql, $data);
    }
}
