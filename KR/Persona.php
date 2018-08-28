

<?php
echo "Hello World!";

    class Persona
    {
        var $nombre;
        var $apellido;
        
        public Persona(var  $name, var $apellido)
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
