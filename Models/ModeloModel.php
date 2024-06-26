<?php
require_once "./Models/DB.php";

class ModeloModel {
    private $db;

    function __construct() {
        // Conectarse a la base de datos
        $this->db = new DB();
    }

    // Obtener todos los Modelos
    function getAllModelos() {
        $sql = "SELECT m.*, ma.nombre AS nombreMarca
        FROM modelo m
        LEFT JOIN marca ma ON m.marcaId = ma.MarcaId";
        return $this->db->select($sql);
    }

    // Obtener un Modelo por su ID
    function getModeloById($ModeloId) {
        $sql = "SELECT * FROM modelo WHERE ModeloId = ?";
        $data = [$ModeloId];
        return $this->db->select($sql, $data);
    }

    // Agregar un nuevo Modelo
    function addModelo($nombre, $marcaId) {
        $sql = "INSERT INTO modelo (nombre, marcaId) VALUES (?, ?)";
        $data = [$nombre, $marcaId];
        $this->db->execute($sql, $data);
    }

    // Actualizar los datos de un Modelo
    function updateModelo($ModeloId, $nombre, $marcaId) {
        $sql = "UPDATE modelo SET nombre = ?, MarcaId=? WHERE ModeloId = ?";
        $data = [$nombre, $marcaId, $ModeloId];
        $this->db->execute($sql, $data);
    }

    // Eliminar un Modelo por su ID
    function deleteModelo($ModeloId) {
        $sql = "DELETE FROM modelo WHERE ModeloId = ?";
        $data = [$ModeloId];
        $this->db->execute($sql, $data);
    }
}
