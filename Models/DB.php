<?php
require_once "./Config.php";

class DB
{

    private $pdo;
    //conexion a BD
    public function __construct()
    {
        $this->pdo = new PDO(
            "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
            DB_USER,
            DB_PASSWORD,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );
    }

    // Método para ejecutar una consulta SELECT
    function select($sql, $data = null)
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
        return $stmt->fetchAll();
    }

    // metodo es para INSERT, UPDATE, DELETE
    function execute($sql, $data = []) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);  
    }


}

