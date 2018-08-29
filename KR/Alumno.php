

<?php
require_once "./Persona.php";

class Alumno extends Persona implements IMaterias
{
    public  $legajo;
    public function  __construct($name = '' ,$surname = '',$legajo = 0)
    {
        parent::__construct($name, $surname);
        $this->legajo = $legajo;
    }

    function Saludar()
    {
        return parent:: Saludar();
    }

    function InscribirMateria($materia)
    {
        
    }

//para la sobrecarga de metodos o construcores, el "=" define que el parametro queda "vacio" si es que no se define un valor para el mismo
//lee los parametros de izq a der y una vez que encuentra el primer igual, define automaticamente los sig valores "vacio"
//public Construc($legajo = '',  $name= '',   $surname =0)

}


?>
