<?php
    include_once "Producto.php";

    switch ($_SERVER["REQUEST_METHOD"])
    {
        case "POST":
        {
            if(!ISSET($_POST["nombre"]) || !ISSET($_POST["codigoBarra"])  )
            {   
                echo "FALTAN CONFIGURAR VARIABLES"; 
                break;
            }
            $producto = new Producto($_POST["nombre"], $_POST["codigoBarra"]);


            
            $encodedObj =  json_encode($producto);
             echo $encodedObj;
    

             //var_dump($_POST);
             var_dump($_FILES);
             $FullNameArch = $_POST["nombre"]."_".$_POST["codigoBarra"].".".explode(".", $_FILES["gif"]["name"])[1];
           //Move_uploaded_Files($origen, $destino);//Solo mueven archivos que fueron subidos por POST
           move_uploaded_file($_FILES["gif"]["tmp_name"],"./Descargas/".$FullNameArch);//tmp_name es donde esta el archivo

            $tamanio = $_FILES["imagen"]["size"];
            $tipo = $_FILES["imagen"]["type"];  
            //echo $tamanio;
            
            if($tamanio <= 2618 && $tipo !="image/jpeg")
            {
                echo "No se puede subir la img";
            }
            else 
            {
                //(is_uploaded_file($_FILES['imagen']['tmp_name']) &&
                $NombreArchAGuardarDescar = $_POST["nombre"]."_".$_POST["codigoBarra"].".".explode(".", $_FILES["imagen"]["name"])[1];
                $NombreArchAGuardarBackup = $_POST["nombre"]."_".$_POST["codigoBarra"].time().".".explode(".", $_FILES["imagen"]["name"])[1];
                if  (file_exists("./Descargas/".$NombreArchAGuardarDescar))
                {
                    //move_uploaded_file($_FILES["imagen"]["tmp_name"],"./Backup/".$NombreArchAGuardar);
                    rename("./Descargas/".$NombreArchAGuardarDescar,"./Backup/".$NombreArchAGuardarBackup);
                }
                move_uploaded_file($_FILES["imagen"]["tmp_name"],"./Descargas/".$NombreArchAGuardarDescar);
            }
            
            $encodedObj =  json_encode($producto);
            $file = fopen("Productos.txt", "a");
            fwrite( $file,$encodedObj );
            fclose($file);

            // validar tipo
            // validar tamaño
            // guardar cambionombre de la imagen 
            
            // --> sI VALIDA guardo en la sig direccion con los datos "BAckUP/nombre_codbarra_fecha.jpj"-->
            // validar que la imagen exista
            
            // guardar producto.txt
            
            // listar en  un  json
            // en una tabla
            
            
    
    
   


    
            
           
           

        }
        break;
       
    }


?>