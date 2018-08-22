
<!DOCTYPE html>
<html>
<body>

<h1>A</h1>

<?php
    include_once"../b.php";//Si el archivo no existe, da un warning, pero no corta el programa y  ejecuta lo que se encuentre debajo del include
    //require_once "./Clases/c.php";//Si el archivo no existe, corta el programa y  notifica fatal error
    echo "$nombre";
    echo saludar($nombre);



?> 

</body>
</html>