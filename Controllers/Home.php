<?php

    class Home extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function home($params)
        {
            echo "Mensaje desde el controlador";
        }
    }
    


?>