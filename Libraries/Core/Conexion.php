<?php

class Conexion
{
    private $connect;

    public function __construct()
    {
        try {
            $this->connect = new PDO("mysql:host=" . DB_HOST . 
                ";dbname=" . DB_NAME ,
                DB_USER,
                DB_PASSWORD,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
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
