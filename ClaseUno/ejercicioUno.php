
<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
    $nombre = "Eliana";
    $apellido = "Vargas";

    $nombreyApellido = $nombre . ", " .$apellido;
    //echo "Nombre: ", $nombre;
    print(  "$nombreyApellido");

    $varUno = 10;
    $varDos = 15;

    $varResta = $varUno - $varDos;

    echo "Resta = ", $varResta;

?> 

</body>
</html>