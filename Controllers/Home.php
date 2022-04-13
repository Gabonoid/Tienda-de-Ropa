<?php

    class Home extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function home($params)
        {

            //Delcaracion de los atributos que queremos mandar a la vista
            $data['tag_page'] = "Tienda de Ropa | Home";


            $this->views->getView($this,"home", $data);
        }
    }
    


?>