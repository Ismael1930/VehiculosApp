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
        $sql = "SELECT v.*, m.nombre AS nombreMarca, m.MarcaId , mo.nombre AS nombreModelo, mo.ModeloId, t.nombre AS tipo_nombre , c.Nombre as nombreCliente, c.ClienteId
        FROM vehiculo v
        LEFT JOIN cliente c ON v.clienteId = c.clienteId
        LEFT JOIN modelo mo ON v.modeloId = mo.modeloId
        LEFT JOIN marca m ON mo.MarcaId = m.marcaId
        LEFT JOIN modelo_tipoVehiculo mt ON v.modeloId = mt.modeloId
        LEFT JOIN tipoVehiculo t ON mt.tipoVehiculoId = t.tipoVehiculoId";
        return $this->db->select($sql);
    }

    // Obtener un vehículo por su ID
    function getVehiculoById($vehiculoId) {
        $sql = "SELECT * FROM vehiculo WHERE vehiculoId = ?";
        $data = [$vehiculoId];
        return $this->db->select($sql, $data);
    }

    // Agregar un nuevo vehículo
    function addVehiculo($chasis, $placa, $date, $color, $clienteId, $marcaId, $modeloId) {
        $sql = "INSERT INTO vehiculo (chasis, placa, date, color, clienteId, marcaId, modeloId) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $data = [$chasis, $placa, $date, $color, $clienteId, $marcaId, $modeloId];
        $this->db->execute($sql, $data);
    }

    // Actualizar los datos de un vehículo
    function updateVehiculo($vehiculoId, $chasis, $placa, $date, $color, $clienteId, $marcaId, $modeloId) {
        $sql = "UPDATE vehiculo SET chasis=?, placa=?, Date=?, color=?, clienteId=?, marcaId=?, modeloId=? WHERE vehiculoId = ?";
        $data = [$chasis, $placa, $date, $color, $clienteId, $marcaId, $modeloId, $vehiculoId];
        $this->db->execute($sql, $data);
    }

    // Eliminar un vehículo por su ID
    function deleteVehiculo($vehiculoId) {
        $sql = "DELETE FROM vehiculo WHERE vehiculoId = ?";
        $data = [$vehiculoId];
        $this->db->execute($sql, $data);
    }
}
