<?php
     class Producto
    {
        public $nombre;
        public $codigoBarra;
        //public $imagen;



        function __construct($nom, $codigoBarra)
        {
            $this->nombre = $nom;
            $this->codigoBarra = $codigoBarra;
        }

    }
?>