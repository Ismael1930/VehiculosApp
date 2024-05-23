<?php
require_once "./Models/DB.php";

class ClienteModel {
    private $db;

    function __construct() {
        // Conectarse a la base de datos
        $this->db = new DB();
    }

    // Obtener todos los clientes
    function getAllClientes() {
        $sql = "SELECT * FROM cliente";
        return $this->db->select($sql);
    }

    // Obtener un cliente por su ID
    function getClienteById($clienteId) {
        $sql = "SELECT * FROM cliente WHERE ClienteId = ?";
        $data = [$clienteId];
        return $this->db->select($sql, $data);
    }

    // Agregar un nuevo cliente
    function addCliente($cedula, $nombre, $apellido, $fechaNacimiento) {
        $sql = "INSERT INTO cliente (cedula, nombre, apellido, fechaNacimiento) VALUES (?, ?, ?, ?)";
        $data = [$cedula ,$nombre, $apellido, $fechaNacimiento];
        $this->db->execute($sql, $data);
    }

    // Actualizar los datos de un cliente
    function updateCliente($clienteId, $cedula, $nombre, $apellido, $fechaNacimiento) {
        $sql = "UPDATE cliente SET cedula = ?, nombre = ?, apellido = ?, fechaNacimiento = ? WHERE ClienteId = ?";
        $data = [$cedula ,$nombre, $apellido, $fechaNacimiento, $clienteId];
        $this->db->execute($sql, $data);
    }

    // Eliminar un cliente por su ID
    function deleteCliente($clienteId) {
        $sql = "DELETE FROM cliente WHERE ClienteId = ?";
        $data = [$clienteId];
        $this->db->execute($sql, $data);
    }
}
