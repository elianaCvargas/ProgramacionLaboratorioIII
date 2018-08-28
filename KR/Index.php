<!DOCTYPE html>
<html>
<body>


<?php
    include_once "Alumno"; 
    //include_once "$Alumno"; 

    $alumno1 = new $Alumno("juan ", "Rosales");
    echo $alumno1->Saludar();

?>
</body>
</html>
