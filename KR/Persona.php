

<?php
echo "Hello World!";

    class Persona
    {
        public  $nombre;
        public $apellido;
        
        public Persona($name,$apellido)
        {
            $this->$nombre = $name;
            $this->$apellido = $apellido;

        }
        function Saludar()
        {
            return "Hola";

        }
    }
    


?>
