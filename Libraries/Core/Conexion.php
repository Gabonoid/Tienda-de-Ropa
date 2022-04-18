<?php

class Conexion
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASSWORD;
    private $db = DB_NAME;
    private $connect;


    public function __construct()
    {
        $conecctionString =
            "mysql:host=" . $this->host .
            ";dbname=" . $this->db .
            "charset=utf8";

        try {
            $this->connect = new PDO($conecctionString, $this->user, $this->password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $this->connect = "Error de conexión";
            echo "Error: " . $e->getMessage();
        }
    }

    public function connect()
    {
        return $this->connect;
    }
}

?>