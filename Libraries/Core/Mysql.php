<?php 

    class Mysql extends Conexion
    {
        private PDO $conexion;
        private $strquery;
        private $arrValues;


        function __construct()
        {
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->connect();
        }

        public function insert(string $query, array $arrValues)
        {
            $this->strquery = $query;
            $this->arrValues = $arrValues;

            $insert = $this->conexion-> prepare($this->strquery);
            $resInsert = $insert -> execute($this->arrValues);
            if ($resInsert) {
                $lastInsert = $this->conexion->lastInsertId();
            } else {
                $lastInsert = 0;
            }

            return $lastInsert;            
        }

    }
?>