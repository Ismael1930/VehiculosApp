<?php
require_once "./Models/DB.php";

class VehiculoModel {
    private $db;

    function __construct() {
        // Conectarse a la base de datos (usando la misma clase DB)
        $this->db = new DB();
    }

    // Obtener todos los vehículos
    function getAllVehiculos() {
        $sql = "SELECT * FROM vehiculo";
        return $this->db->select($sql);
    }

    // Obtener un vehículo por su ID
    function getVehiculoById($vehiculoId) {
        $sql = "SELECT * FROM vehiculo WHERE vehiculoId = ?";
        $data = [$vehiculoId];
        return $this->db->select($sql, $data);
    }

    // Agregar un nuevo vehículo
    function addVehiculo($chasis, $placa, $date, $color, $clienteId, $marcaId) {
        $sql = "INSERT INTO vehiculo (chasis, placa, date, color, clienteId, marcaId) VALUES (?, ?, ?, ?, ?, ?)";
        $data = [$chasis, $placa, $date, $color, $clienteId, $marcaId];
        $this->db->select($sql, $data);
    }

    // Actualizar los datos de un vehículo
    function updateVehiculo($vehiculoId, $chasis, $placa, $date, $color, $clienteId, $marcaId) {
        $sql = "UPDATE vehiculo SET chasis=?, placa=?, date=?, color=?, clienteId=?, marcaId=? WHERE vehiculoId = ?";
        $data = [$chasis, $placa, $date, $color, $clienteId, $marcaId, $vehiculoId];
        $this->db->select($sql, $data);
    }

    // Eliminar un vehículo por su ID
    function deleteVehiculo($vehiculoId) {
        $sql = "DELETE FROM vehiculo WHERE vehiculoId = ?";
        $data = [$vehiculoId];
        $this->db->select($sql, $data);
    }
}
